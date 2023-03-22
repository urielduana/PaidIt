<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
// const props = defineProps({
//     role: {
//         type: String,
//         required: true
//     },

// });
</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Customer
            </h2>
        </template>
        <pre>
            <!-- {{ props.role  }} -->
            dsadaskmdklas
        </pre>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                </div>
            </div>
        </div>
    </AppLayout>
</template>
