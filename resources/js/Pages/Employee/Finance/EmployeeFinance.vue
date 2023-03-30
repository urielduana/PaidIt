<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { defineProps } from "vue";
defineProps({
    user: {
        type: Object,
        required: true,
    },
    employee: {
        type: Object,
        required: true,
    },
    business: {
        type: Object,
        required: true,
    },
    count: {
        type: Number,
        required: true,
    },
    salario: {
        type: String,
        required: true,
    },
});
const logo = "https://es.seaicons.com/wp-content/uploads/2015/11/Business-Shop-icon.png";
</script>

<template>
    <AppLayout title="Finance">
        <template #header>
            <h2>Finance</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden shadow-xl sm:rounded-lg flex justify-center"
                >
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    >
                        <div class="flex flex-col items-center py-10 px-4">
                            <img
                                class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                alt="user image"
                                :src="logo"
                            />
                            <h5
                                class="mb-1 text-xl text-center font-medium text-gray-900"
                            >
                                <div class="text-gray-800 dark:text-white">{{ business.name }} </div>
                            </h5>
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400"
                                >Empresa</span
                            >

                            <span
                                class="text-sm text-center my-4 text-gray-500 dark:text-gray-400"
                                ><span class="font-bold"
                                    >Número de empleados:</span
                                >
                                <div class="text-gray-800 dark:text-white">{{ count }} </div>
                            </span>

                            <span
                                class="text-sm text-center my-2 text-gray-500 dark:text-gray-400"
                                ><span class="font-bold"
                                    >Total de salario:</span
                                >
                                <div class="text-gray-800 dark:text-white">{{ salario }} </div>
                            </span>
                            <span
                                class="text-sm text-center my-2 text-gray-500 dark:text-gray-400"
                                ><span class="font-bold"
                                    >Total de pedido:</span
                                >
                                <!-- <div class="text-gray-800 dark:text-white">{{ salario }} </div> -->
                            </span>
                            <span
                                class="text-sm text-center my-2 text-gray-500 dark:text-gray-400"
                                ><span class="font-bold"
                                    >Ganancias:</span
                                >
                                <!-- <div class="text-gray-800 dark:text-white">{{ salario }} </div> -->
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
