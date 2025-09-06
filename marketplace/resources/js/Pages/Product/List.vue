<template>
  <!-- Floating Cart Button -->
  <button @click="showCart = !showCart" class="bg-blue-500 text-white px-3 py-1 rounded fixed top-4 right-4 z-50">
    🛒 Cart ({{ cart.count }})
  </button>

  <!-- Cart Dropdown -->
  <div v-if="showCart" class="fixed top-12 right-4 w-64 bg-white border shadow p-4 z-50">
    <div v-if="cart.state.items.length === 0" class="text-gray-500 text-sm">Cart is empty</div>
    <div v-else>
      <div v-for="(item, i) in cart.state.items" :key="i" class="flex justify-between mb-2">
        <span>{{ item.name }} x {{ item.quantity }}</span>
        <span>${{ item.price * item.quantity }}</span>
        <button @click="cart.remove(i)" class="text-red-500 ml-2">x</button>
      </div>
      <div class="border-t pt-2 font-bold">Total: ${{ cart.total }}</div>
      <button @click="cart.clear" class="mt-2 w-full bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
        Clear Cart
      </button>
    </div>
  </div>

  <!-- Products Grid -->
  <div class="max-w-6xl mx-auto mt-10">
  <Link href="/dashboard" class="text-blue-500 hover:underline mb-4 inline-block">
      ← Back to Dashboard
    </Link>

    <h2 class="text-3xl font-bold mb-6 text-center">Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div v-for="product in products" :key="product.id" class="border rounded-lg shadow hover:shadow-xl transition overflow-hidden bg-white">
        <img :src="`https://picsum.photos/seed/${product.id}/400/250`" alt="Product Image" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h3 class="font-bold text-lg">{{ product.name }}</h3>
          <p class="text-gray-600 mt-2">{{ product.description }}</p>
          <p class="mt-2 font-semibold">$ {{ product.price }}</p>
          <p class="mt-1 text-sm text-gray-500">
            Vendor:
            <Link :href="`/vendors/${product.vendor.id}`" class="text-blue-500 hover:underline">{{ product.vendor.shop_name }}</Link>
          </p>
          <div class="mt-4 flex justify-between items-center">
            <Link :href="`/products/${product.id}`" class="text-blue-500 hover:underline">View Details</Link>
            <button @click="cart.add(product)" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps, ref } from 'vue'; // ✅ make sure ref is imported
import { Link } from '@inertiajs/inertia-vue3';
import { useCartStore } from '@/Stores/cart';

const cart = useCartStore();
const showCart = ref(false);

const props = defineProps({
    products: Array,
});
</script>
