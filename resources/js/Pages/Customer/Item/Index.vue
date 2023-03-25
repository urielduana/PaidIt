<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
const props = defineProps({});
const columns = [
    {
        label: "Name",
        field: "name",
    },
    {
        label: "Age",
        field: "age",
        type: "number",
    },
    {
        label: "Created On",
        field: "createdAt",
        type: "date",
        dateInputFormat: "yyyy-MM-dd",
        dateOutputFormat: "MMM do yy",
    },
    {
        label: "Percent",
        field: "score",
        type: "percentage",
    },
];
const rows = [
    { id: 1, name: "John", age: 20, createdAt: null, score: 0.03343 },
    { id: 2, name: "Jane", age: 24, createdAt: "2011-10-31", score: 0.03343 },
    { id: 3, name: "Susan", age: 16, createdAt: "2011-10-30", score: 0.03343 },
    { id: 4, name: "Chris", age: 55, createdAt: "2011-10-11", score: 0.03343 },
    { id: 5, name: "Dan", age: 40, createdAt: "2011-10-21", score: 0.03343 },
    { id: 6, name: "John", age: 20, createdAt: "2011-10-31", score: 0.03343 },
];
</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Available Products
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <div>
                        <vue-good-table
                            :columns="columns"
                            :rows="rows"
                            theme="nocturnal"
                        >
                        </vue-good-table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
