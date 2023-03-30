<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";

const props = defineProps({
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
    roles: {
        type: Array,
        required: true,
    },
    permissions: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Employee">
        <template #header>
            <h2>Employee</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg flex justify-center">
                    <!-- Iniciar Tarjeta Info-Usuario-->
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    >
                        <div class="flex flex-col items-center py-10 px-4">
                            <img
                                class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                :src="user.profile_photo_path"
                                alt="user image"
                            />
                            <h5
                                class="mb-1 text-xl text-center font-medium text-gray-900 dark:text-white"
                            >
                                {{ user.name }}
                            </h5>
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400"
                                >Empleado</span
                            >

                            <span
                                class="text-sm text-center my-4 text-gray-500 dark:text-gray-400"
                                ><span class="font-bold text-white"
                                    >Negocio:</span
                                >
                                {{ business.name }}
                            </span>

                            <span
                                class="text-sm text-center mb-2 text-gray-500 dark:text-gray-400"
                                ><span class="font-bold text-white"
                                    >Roles:</span
                                >
                                {{ roles.name }}
                            </span>
                            <span
                                class="text-sm text-center mb-2 text-gray-500 dark:text-gray-400"
                                ><span class="font-bold text-white"
                                    >Permisos:</span
                                >
                                {{ permissions.name }}
                            </span>
                        </div>
                    </div>
                    <!-- Finaliza tarjeta Info-Usuario-->
                </div>
            </div>
        </div>
    </AppLayout>
</template>
