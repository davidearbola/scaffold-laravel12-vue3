<script setup>
import { ref } from 'vue';
import { Link, router } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';

defineProps({ clients: Array });

const showModal = ref(false);
const clientToDelete = ref(null);

function confirmDelete(client) {
    clientToDelete.value = client;
    showModal.value = true;
}

function deleteClient() {
    if (clientToDelete.value) {
        router.delete(`/clients/${clientToDelete.value.id}`);
        showModal.value = false;
    }
}
</script>

<template>
    <DashboardLayout>
    <div>
        <h1 class="text-2xl font-bold mb-4">Lista Clienti</h1>
        <Link href="/clients/create" class="bg-green-500 text-white px-4 py-2 rounded">➕ Aggiungi Cliente</Link>

        <table class="w-full mt-4 border-collapse">
            <thead>
                <tr>
                    <th class="border p-2">Nome</th>
                    <th class="border p-2">Email</th>
                    <th class="border p-2">Azioni</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="client in clients" :key="client.id">
                    <td class="border p-2">
                        <Link :href="`/clients/${client.id}/edit`" class="text-blue-500 hover:underline">
                            {{ client.first_name }}
                        </Link>
                    </td>
                    <td class="border p-2">{{ client.email }}</td>
                    <td class="border p-2">
                        <button @click="confirmDelete(client)" class="text-red-500 hover:underline">🗑 Elimina</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <Modal 
            :show="showModal"
            title="Conferma eliminazione cliente"
            @close="showModal = false"
            @confirm="deleteClient"
        />
    </div>
    </DashboardLayout>
</template>
