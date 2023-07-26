<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import DialogModal from "@/Components/DialogModal.vue";

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
                        <!-- Inicia total mount -->
                        <section class="my-3">
                            <h5
                                class="mb-1 text-xl text-center font-extrabold text-gray-900 dark:text-white"
                            >
                                ${{ totalRevenue.toFixed(2) }}
                                <!-- Mostramos el Total Revenue -->
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
                    class="flex items-center w-96 max-w-2xl bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532] dark:border-gray-700"
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
                        <h2 class="my-4 text-center font-bold">
                            $ {{ customer.balance }}
                        </h2>
                    </div>
                </div>
                <!-- Finaliza saldo -->
            </div>
        </div>
    </AppLayout>
</template>
