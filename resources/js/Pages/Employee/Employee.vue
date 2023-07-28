<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
const img = "https://source.unsplash.com/random?";
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
        type: Object,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Employee">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Employee</h2>
        </template>
        <div class="py-12">
            <div class="flex justify-around py-6">
                <!-- Inicia Tarjeta Info-Employee-->
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532]"
                >
                    <div class="flex flex-col items-center py-10 px-4">
                        <img
                            class="w-24 h-24 mb-3 rounded-full shadow-lg"
                            :src="img"
                            alt="user image"
                        />
                        <section class="my-3">
                            <h2
                                class="mb-1 text-xl text-center font-extrabold text-gray-900 dark:text-white"
                            >
                                {{ user.name }}
                            </h2>
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400"
                                >Employee</span
                            >
                            <div>
                                <h2
                                    class="text-lg font-extrabold text-gray-900 dark:text-white"
                                >
                                    ${{ user.user__employee.salary }}
                                </h2>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400"
                                    >Salary</span
                                >
                            </div>
                        </section>
                        <!-- Inicia user-data -->
                        <section class="text-center my-2">
                            <div class="flex">
                                <h2
                                    class="text-base font-extrabold text-gray-900 dark:text-white"
                                >
                                    Roles:
                                </h2>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400"
                                    >{{ roles[0].name }}</span
                                >
                            </div>
                            <div class="flex">
                                <h2
                                    class="text-base font-extrabold text-gray-900 dark:text-white"
                                >
                                    Phone:
                                </h2>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400"
                                    >{{ user.phone }}</span
                                >
                            </div>
                            <div class="flex">
                                <h2
                                    class="text-base font-extrabold text-gray-900 dark:text-white"
                                >
                                    Email:
                                </h2>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400"
                                    >{{ user.email }}</span
                                >
                            </div>
                        </section>
                        <!-- Finaliza user-data -->
                    </div>
                </div>
                <!-- Finaliza tarjeta Info-Usuario-->

                <!-- Inicia saldo -->
                <div
                    class="max-w-2xl bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532] dark:border-gray-700 p-4 grid content-center gap-10"
                >
                    <h6
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white justify-items-center grid"
                    >
                        Business
                    </h6>
                    <div class="w-full text-center table-container">
                        <div class="flex">
                            <h2
                                class="text-base font-extrabold text-gray-900 dark:text-white"
                            >
                                Name:
                            </h2>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400"
                                >{{ business.name }}</span
                            >
                        </div>
                        <div class="flex">
                            <h2
                                class="text-base font-extrabold text-gray-900 dark:text-white"
                            >
                                Email:
                            </h2>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400"
                                >{{ business.email }}</span
                            >
                        </div>
                        <div class="flex">
                            <h2
                                class="text-base font-extrabold text-gray-900 dark:text-white"
                            >
                                Phone:
                            </h2>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400"
                                >{{ business.phone }}</span
                            >
                        </div>
                        <div class="flex">
                            <h2
                                class="text-base font-extrabold text-gray-900 dark:text-white"
                            >
                                Address:
                            </h2>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400"
                                >{{ business.address }}</span
                            >
                        </div>
                    </div>
                </div>
                <!-- Finaliza saldo -->
            </div>
        </div>
    </AppLayout>
</template>
