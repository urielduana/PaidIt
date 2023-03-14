<script setup>
import AppLayout from '@/Layouts/CustomerAppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Checkbox from '@/Components/Checkbox.vue';

const props = defineProps({
    view_role: {
        type: String,
        required: true
    },

});
  
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Customer
            </h2>
        </template>
        <pre>
            {{ view_role }}
        </pre>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                </div>
            </div>
        </div>
    </AppLayout>
</template>
