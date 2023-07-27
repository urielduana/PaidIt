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
    transactions: {
        type: Array,
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

// Encontramos el valor máximo de ingresos y gastos para normalizar los valores
const maxIncome = Math.max(totalIncome, totalExpenses);
const maxExpenses = maxIncome;

// Calculamos los porcentajes normalizados de ingresos y gastos
const incomePercentage = normalizeValue(totalIncome, 0, maxIncome) * 100;
const expensePercentage = normalizeValue(totalExpenses, 0, maxExpenses) * 100;

const totalRevenue = totalIncome - totalExpenses;

const img =
    "https://img.freepik.com/vector-gratis/fondo-galaxia-realista_52683-12122.jpg?q=10&h=200";
</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Customer</h2>
        </template>
        <div class="py-12">
            <div class="flex justify-around py-6">
                <!-- Inicia Tarjeta Info-Usuario-->
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532]"
                >
                    <div class="flex flex-col items-center py-10 px-4">
                        <img
                            class="w-24 h-24 mb-3 rounded-full shadow-lg"
                            :src="user.profile_photo_url"
                            alt="user image"
                        />
                        <section class="my-3">
                            <h5
                                class="mb-1 text-xl text-center font-extrabold text-gray-900 dark:text-white"
                            >
                                ${{ totalRevenue.toFixed(2) }}
                            </h5>
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400"
                                >Total Revenue</span
                            >
                        </section>
                        <!-- Income bar -->
                        <va-progress-bar
                            :model-value="incomePercentage"
                            size="22px"
                            content-inside
                            color="info"
                            class="my-3"
                        >
                            Income: ${{ totalIncome }}
                        </va-progress-bar>
                        <!-- Bills bar -->
                        <va-progress-bar
                            :model-value="expensePercentage"
                            size="22px"
                            content-inside
                            color="danger"
                            class="mb-3"
                        >
                            Bills: ${{ totalExpenses }}
                        </va-progress-bar>
                        <!-- Inicia user-data -->
                        <section class="text-center grid gap-3 my-2">
                            <div>
                                <h2
                                    class="text-lg font-extrabold text-gray-900 dark:text-white"
                                >
                                    {{ user.name }}
                                </h2>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400"
                                    >customer</span
                                >
                            </div>
                            <div>
                                <h2
                                    class="text-base font-extrabold text-gray-900 dark:text-white"
                                >
                                    {{ customer.guardian_name }}
                                </h2>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400"
                                    >Tutor</span
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
                        Activity
                    </h6>
                    <div class="w-full text-center table-container">
                        <table class="table-auto w-full">
                            <thead
                                class="sticky top-0 bg-white dark:bg-[#1C2532]"
                            >
                                <tr>
                                    <th class="px-4 py-2">N°</th>
                                    <th class="px-4 py-2">Mount</th>
                                    <th class="px-4 py-2">Type</th>
                                    <th class="px-4 py-2">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="item in transactions"
                                    :key="item.id"
                                    class="table-row-divider"
                                >
                                    <td class="border px-4 py-2">
                                        {{ item.id }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        ${{ parseFloat(item.mount).toFixed(2) }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        <div
                                            :class="{
                                                'text-green-500':
                                                    item.name === 'income',
                                                'text-red-500':
                                                    item.name === 'expense',
                                            }"
                                            class="py-1 px-2 rounded-md font-semibold"
                                        >
                                            {{ item.name }}
                                        </div>
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ item.created_at.substring(0, 10) }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Finaliza saldo -->
            </div>
        </div>
    </AppLayout>
</template>

<style>
.table-container {
    max-height: 250px;
    overflow-y: auto;
}
thead.sticky {
    position: sticky;
    top: 0;
    z-index: 1;
}
.table-container::-webkit-scrollbar {
    width: 8px;
    background-color: none;
}
.table-container::-webkit-scrollbar-thumb {
    background-color: #223a59;
    border-radius: 4px;
}
</style>
