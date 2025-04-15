<template>
    <DashboardLayout>
      <h1 class="text-2xl font-bold mb-4">Gestione Utenti</h1>
      <table class="min-w-full bg-white border border-gray-200">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b">ID</th>
            <th class="py-2 px-4 border-b">Nome</th>
            <th class="py-2 px-4 border-b">Email</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
            <td class="py-2 px-4 border-b">{{ user.id }}</td>
            <td class="py-2 px-4 border-b">{{ user.name }}</td>
            <td class="py-2 px-4 border-b">{{ user.email }}</td>
          </tr>
        </tbody>
      </table>
    </DashboardLayout>
  </template>
  
  <script setup>
  import DashboardLayout from '@/Layouts/DashboardLayout.vue';
  defineProps({
    users: Array
  })
  </script>
  