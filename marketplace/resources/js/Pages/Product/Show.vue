<template>
<div class="max-w-3xl mx-auto mt-10">

    <!-- Back Button -->
    <div class="mb-6">
      <Link href="/products" class="text-blue-500 hover:underline inline-block">
        ← Back to Products
      </Link>
    </div>

  <div class="max-w-3xl mx-auto mt-10 p-4 border rounded shadow bg-white">

    <h2 class="text-3xl font-bold mb-4">{{ product.name }}</h2>
    <img
      :src="`https://picsum.photos/seed/${product.id}/600/300`"
      alt="Product Image"
      class="w-full h-64 object-cover mb-4 rounded"
    />
    <p class="text-gray-700 mb-2">{{ product.description }}</p>
    <p class="font-semibold text-lg mb-2">$ {{ product.price }}</p>
    <p class="text-sm text-gray-500 mb-4">
      Vendor:
      <Link :href="`/vendors/${product.vendor.id}`" class="text-blue-500 hover:underline">
        {{ product.vendor.shop_name }}
      </Link>
    </p>

    <div class="text-center mt-4">
    <button
      @click="cart.add(product)"
      class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
    >
      Add to Cart
    </button>
    </div>
    </div>

  </div>

</template>


<script setup>
import { useCartStore } from '@/Stores/cart'
import { Link } from '@inertiajs/inertia-vue3'

const cart = useCartStore()

const props = defineProps({
    product: Object
})
</script>
