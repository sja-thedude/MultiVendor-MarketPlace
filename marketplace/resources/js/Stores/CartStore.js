import { reactive, computed } from 'vue'

// Single reactive store instance
const state = reactive({
    items: [],
})

export const cart = {
    state,

    add(product) {
        this.state.items.push(product)
    },

    remove(index) {
        this.state.items.splice(index, 1)
    },

    clear() {
        this.state.items = []
    },

    get total() {
        return this.state.items.reduce((sum, item) => sum + item.price, 0)
    },

    get count() {
        return this.state.items.length
    },
}
