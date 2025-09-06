<template>
  <div class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded-lg shadow">
    <h2 class="text-3xl font-bold mb-4 text-center">Cart</h2>

    <div v-if="cart.items.length === 0" class="text-center text-gray-500">
      Your cart is empty
    </div>

    <div v-else>
      <div v-for="(item, index) in cart.items" :key="index" class="border p-4 rounded mb-2 flex justify-between items-center">
        <div>
          <h3 class="font-bold">{{ item.name }}</h3>
          <p>$ {{ item.price }}</p>
        </div>
        <button @click="cart.remove(index)" class="text-red-500 hover:underline">Remove</button>
      </div>
      <p class="font-bold mt-4">Total: $ {{ cart.total() }}</p>
    </div>

    <Link href="/products" class="text-blue-500 mt-4 inline-block hover:underline">← Continue Shopping</Link>
  </div>
</template>

<script setup>
import { cart } from '../Stores/CartStore'
import { Link } from '@inertiajs/inertia-vue3'
</script>
