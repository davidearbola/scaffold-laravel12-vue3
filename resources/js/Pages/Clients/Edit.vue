<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'
import DashboardLayout from '@/Layouts/DashboardLayout.vue'

const props = defineProps({
    client: Object,
    errors: Object,
})

const form = useForm({
    first_name: props.client.first_name,
    last_name: props.client.last_name,
    email: props.client.email,
    phone: props.client.phone,
})

function submit() {
    form.put(route('clients.update', props.client.id))
}
</script>

<template>
  <DashboardLayout>
  <div>
    <h1>Modifica Cliente</h1>
    <form @submit.prevent="submit">
      <input v-model="form.first_name" type="text" placeholder="Nome">
      <input v-model="form.last_name" type="text" placeholder="Cognome">
      <input v-model="form.email" type="email" placeholder="Email">
      <input v-model="form.phone" type="text" placeholder="Telefono">
      <button type="submit">Salva</button>
    </form>
  </div>
  </DashboardLayout>
</template>
