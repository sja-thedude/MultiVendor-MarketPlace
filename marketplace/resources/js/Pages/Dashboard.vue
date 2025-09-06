<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-900 mb-6">
                        You're logged in!
                    </div>

                    <!-- Links to Products and Vendors -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <Link
                            href="/products"
                            class="block bg-blue-500 text-white text-center py-4 rounded shadow hover:bg-blue-600"
                        >
                            View Products
                        </Link>

                        <Link
                            href="/vendors"
                            class="block bg-green-500 text-white text-center py-4 rounded shadow hover:bg-green-600"
                        >
                            View Vendors
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
