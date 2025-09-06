<template>
  <div class="max-w-6xl mx-auto mt-10">

<Link href="/dashboard" class="text-blue-500 hover:underline mb-4 inline-block">
      ← Back to Dashboard
    </Link>

    <h2 class="text-3xl font-bold mb-6 text-center">Vendors</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div v-for="vendor in vendors" :key="vendor.id" class="border p-4 rounded shadow hover:shadow-lg transition">
        <h3 class="font-bold text-lg">{{ vendor.shop_name }}</h3>
        <p class="text-gray-600 mt-2">{{ vendor.description }}</p>
        <Link :href="`/vendors/${vendor.id}`" class="text-blue-500 mt-2 inline-block hover:underline">
          View Products
        </Link>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
  vendors: Array
})
</script>
