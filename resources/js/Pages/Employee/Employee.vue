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
    transactions: {
        type: Object,
        required: true,
    },
});
const transactions = props.transactions;

// Función para normalizar los valores
function normalizeValue(value, min, max) {
    return (value - min) / (max - min);
}

// Totales de ingresos y gastos
const totalIncome =
    transactions &&
    transactions
        .filter((transaction) => transaction.name === "income")
        .reduce(
            (total, transaction) => total + parseFloat(transaction.mount),
            0
        );
const totalExpenses =
    transactions &&
    transactions
        .filter((transaction) => transaction.name === "expense")
        .reduce(
            (total, transaction) => total + parseFloat(transaction.mount),
            0
        );

//Valor máximo de ingresos y gastos para normalizar los valores
const maxIncome = Math.max(totalIncome, totalExpenses);
const maxExpenses = maxIncome;

//calculamos los porcentajes normalizados de ingresos y gastos
const incomePercentage = normalizeValue(totalIncome, 0, maxIncome) * 100;
const expensePercentage = normalizeValue(totalExpenses, 0, maxExpenses) * 100;
const totalRevenue = totalIncome - totalExpenses;
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
                            class="w-24 h-24 mb-6 rounded-full shadow-lg"
                            :src="img"
                            alt="user image"
                        />
                        <!-- Inicia user-data -->
                        <section class="text-center grid gap-4">
                            <div>
                                <h2
                                    class="text-xl font-extrabold text-gray-900 dark:text-white"
                                >
                                    {{ user.name }}
                                </h2>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400"
                                    >Employee</span
                                >
                            </div>
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
                        <section class="text-center my-6 w-52">
                            <div class="flex">
                                <h2
                                    class="text-base font-extrabold text-gray-900 dark:text-white flex justify-start"
                                >
                                    Roles:
                                </h2>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400 flex justify-end"
                                    >{{ roles[0].name }}</span
                                >
                            </div>
                            <div class="flex">
                                <h2
                                    class="text-base font-extrabold text-gray-900 dark:text-white flex justify-start"
                                >
                                    Phone:
                                </h2>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400 flex justify-end"
                                    >{{ user.phone }}</span
                                >
                            </div>
                            <div class="flex">
                                <h2
                                    class="text-base font-extrabold text-gray-900 dark:text-white flex justify-start"
                                >
                                    Email:
                                </h2>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400 flex justify-end"
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
                    class="max-w-2xl bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532] dark:border-gray-700 p-4 grid justify-items-center"
                >
                    <h6
                        class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white justify-items-center grid"
                    >
                        Business
                    </h6>
                    <va-progress-bar
                        :model-value="incomePercentage"
                        size="22px"
                        content-inside
                        color="info"
                    >
                        Income: ${{ totalIncome }}
                    </va-progress-bar>
                    <va-progress-bar
                        :model-value="expensePercentage"
                        size="22px"
                        content-inside
                        color="danger"
                    >
                        Bills: ${{ totalExpenses }}
                    </va-progress-bar>
                    <h2
                        class="text-lg font-extrabold text-gray-900 dark:text-white flex gap-4"
                    >
                        Total: <span> ${{ totalRevenue }}</span>
                    </h2>
                    <section class="w-80 text-center table-container grid">
                        <div class="flex">
                            <h2
                                class="text-base font-extrabold text-gray-900 dark:text-white justify-start flex"
                            >
                                Name:
                            </h2>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400 justify-end flex"
                                >{{ business.name }}</span
                            >
                        </div>
                        <div class="flex">
                            <h2
                                class="text-base font-extrabold text-gray-900 dark:text-white justify-start flex"
                            >
                                Email:
                            </h2>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400 justify-end flex"
                                >{{ business.email }}</span
                            >
                        </div>
                        <div class="flex">
                            <h2
                                class="text-base font-extrabold text-gray-900 dark:text-white justify-start flex"
                            >
                                Phone:
                            </h2>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400 justify-end flex"
                                >{{ business.phone }}</span
                            >
                        </div>
                        <div class="flex">
                            <h2
                                class="text-base font-extrabold text-gray-900 dark:text-white justify-start flex"
                            >
                                Address:
                            </h2>
                            <span
                                class="text-sm text-gray-500 dark:text-gray-400 justify-end flex"
                                >{{ business.address }}</span
                            >
                        </div>
                    </section>
                </div>
                <!-- Finaliza saldo -->
            </div>
        </div>
    </AppLayout>
</template>
