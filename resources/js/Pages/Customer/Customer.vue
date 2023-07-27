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
// Datos de ejemplo de transacciones
const transactions = [
    { amount: 100, type: "income" },
    { amount: 9, type: "income" },
    { amount: 8, type: "expense" },
    { amount: 1, type: "expense" },
    // ... más transacciones
];

// Función para normalizar los valores dentro de un rango específico
function normalizeValue(value, min, max) {
    return (value - min) / (max - min);
}

// Calculamos los totales de ingresos y gastos
const totalIncome = transactions
    .filter((transaction) => transaction.type === "income")
    .reduce((total, transaction) => total + transaction.amount, 0);

const totalExpenses = transactions
    .filter((transaction) => transaction.type === "expense")
    .reduce((total, transaction) => total + transaction.amount, 0);

// Encontramos el valor máximo de ingresos y gastos para normalizar los valores
const maxIncome = Math.max(totalIncome, totalExpenses);
const maxExpenses = maxIncome;

// Calculamos los porcentajes normalizados de ingresos y gastos
const incomePercentage = normalizeValue(totalIncome, 0, maxIncome) * 100;
const expensePercentage = normalizeValue(totalExpenses, 0, maxExpenses) * 100;

const totalRevenue = totalIncome - totalExpenses;
const img =
    "https://img.freepik.com/vector-gratis/fondo-galaxia-realista_52683-12122.jpg?q=10&h=200";

const items = [
    {
        id: 1,
        created_at: "2023-07-26",
        status: {
            status: "income",
        },
    },
    {
        id: 2,
        created_at: "2023-07-25",
        status: {
            status: "expense",
        },
    },
    {
        id: 3,
        created_at: "2023-07-24",
        status: {
            status: "income",
        },
    },
    {
        id: 4,
        created_at: "2023-07-23",
        status: {
            status: "expense",
        },
    },
    {
        id: 5,
        created_at: "2023-07-22",
        status: {
            status: "income",
        },
    },
    {
        id: 6,
        created_at: "2023-07-21",
        status: {
            status: "expense",
        },
    },
    {
        id: 7,
        created_at: "2023-07-20",
        status: {
            status: "income",
        },
    },
    {
        id: 8,
        created_at: "2023-07-19",
        status: {
            status: "expense",
        },
    },
    {
        id: 9,
        created_at: "2023-07-18",
        status: {
            status: "income",
        },
    },
    {
        id: 10,
        created_at: "2023-07-17",
        status: {
            status: "expense",
        },
    },
    {
        id: 11,
        created_at: "2023-07-16",
        status: {
            status: "income",
        },
    },
    {
        id: 12,
        created_at: "2023-07-15",
        status: {
            status: "expense",
        },
    },
    {
        id: 13,
        created_at: "2023-07-14",
        status: {
            status: "income",
        },
    },
    {
        id: 14,
        created_at: "2023-07-13",
        status: {
            status: "expense",
        },
    },
    {
        id: 15,
        created_at: "2023-07-12",
        status: {
            status: "income",
        },
    },
    {
        id: 16,
        created_at: "2023-07-11",
        status: {
            status: "expense",
        },
    },
    {
        id: 17,
        created_at: "2023-07-10",
        status: {
            status: "income",
        },
    },
    {
        id: 18,
        created_at: "2023-07-09",
        status: {
            status: "expense",
        },
    },
    {
        id: 19,
        created_at: "2023-07-08",
        status: {
            status: "income",
        },
    },
    {
        id: 20,
        created_at: "2023-07-07",
        status: {
            status: "expense",
        },
    },
];
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
                            :src="img"
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
                    class="max-w-3xl bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532] dark:border-gray-700 p-4 grid content-center gap-10"
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
                                    <th class="px-4 py-2">Tipo</th>
                                    <th class="px-4 py-2">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="item in items"
                                    :key="item.id"
                                    class="table-row-divider"
                                >
                                    <td class="border px-4 py-2">
                                        {{ item.id }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        <div
                                            :class="{
                                                'text-green-500':
                                                    item.status.status ===
                                                    'income',
                                                'text-red-500':
                                                    item.status.status ===
                                                    'expense',
                                            }"
                                            class="py-1 px-2 rounded-md font-semibold"
                                        >
                                            {{ item.status.status }}
                                        </div>
                                    </td>

                                    <td class="border px-4 py-2">
                                        {{ item.created_at }}
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
