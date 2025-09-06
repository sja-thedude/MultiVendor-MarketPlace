import { defineStore } from 'pinia'
import { reactive, computed } from 'vue'

export const useCartStore = defineStore('cart', () => {
  const state = reactive({
    items: []
  })

  const add = (product) => {
    const existing = state.items.find(item => item.id === product.id)
    if (existing) {
      existing.quantity++
    } else {
      state.items.push({ ...product, quantity: 1 })
    }
  }

  const remove = (index) => {
    state.items.splice(index, 1)
  }

  const clear = () => {
    state.items = []
  }

  const total = computed(() => state.items.reduce((sum, item) => sum + item.price * item.quantity, 0))
  const count = computed(() => state.items.reduce((sum, item) => sum + item.quantity, 0))

  return { state, add, remove, clear, total, count }
})
