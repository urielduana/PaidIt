<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';


// const props = defineProps({
//     // role: {
//     //     type: String,
//     //     required: true
//     // },
//     // example: Object
// });
// console.log(props);

  
</script>

<template>
    <AppLayout title="Employee">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Employee
            </h2>
        </template>
        <pre>
            <!-- {{ props.role  }} -->
        </pre>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                </div>
            </div>
        </div>
    </AppLayout>
</template>
