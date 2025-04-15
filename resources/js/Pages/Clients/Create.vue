<script setup>
import { useForm } from '@inertiajs/vue3';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';

const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone: ''
});

const submit = () => form.post('/clients');
</script>

<template>
    <DashboardLayout>
    <div>
        <h1 class="text-2xl font-bold mb-4">Crea Nuovo Cliente</h1>
        <form @submit.prevent="submit" class="space-y-4">
            <div>
                <label>Nome</label>
                <input v-model="form.first_name" type="text" class="border p-2 w-full" required />
            </div>
            <div>
                <label>Cognome</label>
                <input v-model="form.last_name" type="text" class="border p-2 w-full" required />
            </div>
            <div>
                <label>Email</label>
                <input v-model="form.email" type="email" class="border p-2 w-full" required />
            </div>
            <div>
                <label>Telefono</label>
                <input v-model="form.phone" type="text" class="border p-2 w-full" required />
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Salva</button>
        </form>
    </div>
    </DashboardLayout>
</template>
