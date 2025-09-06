<template>
  <div class="max-w-6xl mx-auto mt-10">
  <Link href="/vendors" class="text-blue-500 hover:underline mt-6 inline-block">← Back to Vendors</Link>

    <h2 class="text-3xl font-bold mb-6 text-center">{{ vendor.shop_name }}</h2>
    <p class="text-gray-700 mb-4 text-center">{{ vendor.description }}</p>

    <h3 class="text-2xl font-semibold mb-4">Products</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div v-for="product in vendor.products" :key="product.id" class="border rounded-lg shadow hover:shadow-xl transition overflow-hidden bg-white">
        <img :src="`https://picsum.photos/seed/${product.id}/400/250`" alt="Product Image" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="font-bold text-lg">{{ product.name }}</h3>
          <p class="text-gray-600 mt-2">{{ product.description }}</p>
          <p class="mt-2 font-semibold">$ {{ product.price }}</p>
          <Link :href="`/products/${product.id}`" class="text-blue-500 mt-4 inline-block hover:underline">View Details</Link>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
  vendor: Object
})
</script>
