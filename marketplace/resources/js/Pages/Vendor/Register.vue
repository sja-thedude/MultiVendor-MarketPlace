<template>
  <div class="max-w-md mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-4">Vendor Registration</h2>
    <form @submit.prevent="submit">
      <div class="mb-4">
        <label class="block mb-1">Shop Name</label>
        <input v-model="form.shop_name" type="text" class="border p-2 w-full" />
      </div>
      <div class="mb-4">
        <label class="block mb-1">Description</label>
        <textarea v-model="form.description" class="border p-2 w-full"></textarea>
      </div>
      <div class="mb-4">
        <label class="block mb-1">Phone</label>
        <input v-model="form.phone" type="text" class="border p-2 w-full" />
      </div>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Register</button>
    </form>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { Inertia } from '@inertiajs/inertia'

const form = ref({
  shop_name: '',
  description: '',
  phone: ''
})

const submit = () => {
  Inertia.post('/vendor/register', form.value)
}
</script>
