<script setup>
import { ref, watch } from 'vue';

const props = defineProps({
    show: Boolean,
    title: String,
});

const emit = defineEmits(['close', 'confirm']);
const isVisible = ref(props.show);

watch(() => props.show, (newVal) => {
    isVisible.value = newVal;
});

const close = () => {
    isVisible.value = false;
    emit('close');
};

const confirm = () => {
    emit('confirm');
};
</script>

<template>
    <transition name="fade">
        <div
            v-if="isVisible"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
        >
            <div class="bg-white rounded-xl shadow-lg w-96 p-6 text-center">
                <h2 class="text-xl font-bold mb-4">{{ title }}</h2>
                <p class="mb-6 text-gray-700">Questa azione non può essere annullata.</p>
                <div class="flex justify-center gap-4">
                    <button @click="confirm" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                        Conferma
                    </button>
                    <button @click="close" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
                        Annulla
                    </button>
                </div>
            </div>
        </div>
    </transition>
</template>

<style scoped>
.fade-enter-active, .fade-leave-active {
    transition: opacity 0.3s ease;
}
.fade-enter-from, .fade-leave-to {
    opacity: 0;
}
</style>
