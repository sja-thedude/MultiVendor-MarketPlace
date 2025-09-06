<script setup>
import { ref } from 'vue'
import { useCartStore } from '@/Stores/cart'

const cart = useCartStore()
const showCart = ref(false)
</script>

<template>
<header class="flex justify-between items-center p-4 bg-gray-100">
  <h1 class="text-xl font-bold">MultiVendor Marketplace</h1>

  <div class="relative">
    <button @click="showCart = !showCart" class="bg-blue-500 text-white px-3 py-1 rounded flex items-center gap-1">
      🛒 Cart ({{ cart.count }})
    </button>

    <div v-if="showCart" class="absolute right-0 mt-2 w-64 bg-white border shadow p-2 z-50">
      <div v-if="cart.state.items.length === 0" class="text-gray-500 text-sm">Cart is empty</div>
      <div v-else>
        <div v-for="(item, index) in cart.state.items" :key="index" class="flex justify-between mb-2">
          <span>{{ item.name }} x {{ item.quantity }}</span>
          <span>${{ item.price * item.quantity }}</span>
          <button @click="cart.remove(index)" class="text-red-500 ml-2">x</button>
        </div>
        <div class="border-t pt-2 font-bold">Total: ${{ cart.total }}</div>
        <button @click="cart.clear" class="mt-2 w-full bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
          Checkout
        </button>
      </div>
    </div>
  </div>
</header>

<slot></slot>
</template>
