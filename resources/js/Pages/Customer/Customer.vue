<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    user: {
        type: Object,
        required: true,
    },
    customer: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2 class="font-semibold text-xlleading-tight text-xl">Customer</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center m-12">
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
                                >Cliente</span
                            >

                            <span
                                class="text-sm text-center my-4 text-gray-500 dark:text-gray-400"
                                ><span class="font-bold text-white"
                                    >Titular:</span
                                >
                                {{ customer.guardian_name }}</span
                            >
                        </div>
                    </div>
                    <!-- Finaliza tarjeta Info-Usuario-->

                    <!-- Inicia saldo -->
                    <div
                        class="flex items-center w-96 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    >
                        <div class="w-full text-center">
                            <h6
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                            >
                                Cuenta
                            </h6>
                            <p
                                class="font-normal my-4 text-gray-700 dark:text-gray-400"
                            >
                                Saldo disponible:
                                
                            </p>
                            <p class="my-4 text-center">
                                 <span class="font-bold text-white text-center"
                                    >$ {{ customer.balance }}</span
                                >
                            </p>
                           <div class="flex justify-center">
                            <a
                                href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                >Depositar</a
                            >
                           </div>
                        </div>
                    </div>
                    <!-- Finaliza saldo -->
                </div>
            </div>
        </div>
    </AppLayout>
</template>
