<script setup>
import { ref } from 'vue'
import { Link, useForm } from '@inertiajs/vue3'
import { HomeIcon, UsersIcon, ArrowRightCircleIcon, MoonIcon } from '@heroicons/vue/24/outline'

const sidebarOpen = ref(false)
const logoutForm = useForm({})
const logout = () => {
  logoutForm.post(route('logout'))
}
</script>

<template>
  <div class="min-h-screen flex flex-col md:flex-row bg-gray-100 text-gray-900">
    <!-- Sidebar -->
    <aside
      :class="[
        'w-full md:w-64 bg-white shadow-md z-50 md:relative fixed top-0 left-0 h-screen transition-transform duration-300',
        sidebarOpen ? 'translate-x-0' : '-translate-x-full',
        'md:translate-x-0'
      ]"
    >
      <div class="p-4 border-b font-bold text-lg">
        Admin Panel
      </div>
      <nav class="p-4 space-y-2">
        <Link href="/dashboard" class="flex items-center space-x-2 hover:text-blue-600">
          <HomeIcon class="h-5 w-5" />
          <span>Dashboard</span>
        </Link>
        <Link href="/users" class="flex items-center space-x-2 hover:text-blue-600">
          <UsersIcon class="h-5 w-5" />
          <span>Utenti</span>
        </Link>
        <Link href="/clients" class="flex items-center space-x-2 hover:text-blue-600">
          <MoonIcon class="h-5 w-5" /> <span>Clienti</span>
        </Link>
        <button
          @click="logout"
          class="flex items-center space-x-2 text-left w-full hover:text-red-600 mt-4"
        >
          <ArrowRightCircleIcon class="h-5 w-5" />
          <span>Esci</span>
        </button>
      </nav>
    </aside>

    <!-- Overlay (mobile only) -->
    <div
      v-if="sidebarOpen"
      class="fixed inset-0 bg-black bg-opacity-50 md:hidden"
      @click="sidebarOpen = false"
    />

    <!-- Content -->
    <div class="flex-1 p-4 h-screen overflow-y-auto">
      <div class="md:hidden mb-4">
        <button @click="sidebarOpen = true" class="bg-blue-600 text-white px-4 py-2 rounded">
          Menu
        </button>
      </div>

      <slot />
    </div>
  </div>
</template>
