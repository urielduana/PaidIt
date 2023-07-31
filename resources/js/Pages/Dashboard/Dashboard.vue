<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
const img = "https://source.unsplash.com/random?";
const props = defineProps({
    business: {
        type: Object,
        required: true,
    },
    user: {
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
// Función para agrupar transacciones por negocio
function groupTransactionsByBusiness(transactions) {
    const businesses = {};

    transactions.forEach((transaction) => {
        const businessId = transaction.business_id;
        if (!businesses[businessId]) {
            businesses[businessId] = {
                id: businessId,
                name: transaction.business_name,
                email: transaction.business_email,
                phone: transaction.business_phone,
                address: transaction.business_address,
                totalIncome: 0,
                totalExpenses: 0,
            };
        }

        if (transaction.name === "income") {
            businesses[businessId].totalIncome += parseFloat(transaction.mount);
        } else if (transaction.name === "expense") {
            businesses[businessId].totalExpenses += parseFloat(
                transaction.mount
            );
        }
    });

    return Object.values(businesses);
}

// Agrupar transacciones por negocio
const transactionsByBusiness = groupTransactionsByBusiness(transactions);

// Calcular porcentajes normalizados para cada negocio
transactionsByBusiness.forEach((businessItem) => {
    const maxIncomeExpenses = Math.max(
        businessItem.totalIncome,
        businessItem.totalExpenses
    );
    businessItem.incomePercentage =
        normalizeValue(businessItem.totalIncome, 0, maxIncomeExpenses) * 100;
    businessItem.expensePercentage =
        normalizeValue(businessItem.totalExpenses, 0, maxIncomeExpenses) * 100;
    businessItem.totalRevenue =
        businessItem.totalIncome - businessItem.totalExpenses;
});

// Funcion para conseguir el nombre del negocio
function getBusinessName(businessId) {
    const business = props.business.find((business) => business.id === businessId);
    return business ? business.name : "";
}
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2>Dashboard</h2>
        </template>
        <div class="py-12">
            <div class="flex justify-around py-6">
                <!-- Inicia Info-Usuario -->
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532] flex items-center">
                    <div class="flex flex-col items-center py-10 px-4">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" :src="img" alt="user image" />
                        <section class="text-center grid gap-4">
                            <div>
                                <h2 class="text-xl font-extrabold text-gray-900 dark:text-white">
                                    {{ user.name }}
                                </h2>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Employee</span>
                            </div>
                        </section>
                        <section class="text-center my-6 w-52">
                            <div class="flex">
                                <h2 class="text-base font-extrabold text-gray-900 dark:text-white flex justify-start">
                                    Phone:
                                </h2>
                                <span class="text-sm text-gray-500 dark:text-gray-400 flex justify-end">{{ user.phone
                                }}</span>
                            </div>
                            <div class="flex">
                                <h2 class="text-base font-extrabold text-gray-900 dark:text-white flex justify-start">
                                    Email:
                                </h2>
                                <span class="text-sm text-gray-500 dark:text-gray-400 flex justify-end">{{ user.email
                                }}</span>
                            </div>
                        </section>
                        <!-- Finaliza user-data -->
                    </div>
                </div>

                <!-- Inicia graficos -->
                <div
                    class="max-w-3xl bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532] dark:border-gray-700 p-4 grid justify-items-center">
                    <h6
                        class="mt-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white justify-items-center grid">
                        Business
                    </h6>
                    <!-- bucle cada negocio -->
                    <div class="main-class my-4 p-4">

                        <div v-for="businessItem in transactionsByBusiness" :key="businessItem.id">
                            <section class="w-[600px] table-container grid">
                                <div class="flex">
                                    <h2 class="text-base font-extrabold text-gray-900 dark:text-white">
                                        Nombre: <span class="text-sm text-gray-500 dark:text-gray-400">
                                            {{ getBusinessName(businessItem.id) }}
                                        </span>
                                    </h2>
                                </div>
                            </section>
                            <div
                                class="max-w-2xl bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532] dark:border-gray-700 grid justify-items-center">
                                <h6
                                    class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white justify-items-center grid">
                                    {{ businessItem.name }}
                                </h6>
                                <va-progress-bar :model-value="businessItem.incomePercentage" size="22px" content-inside
                                    color="info" class="my-4">
                                    Income: ${{ businessItem.totalIncome }}
                                </va-progress-bar>
                                <va-progress-bar :model-value="businessItem.expensePercentage" size="22px" content-inside
                                    color="danger">
                                    Bills: ${{ businessItem.totalExpenses }}
                                </va-progress-bar>
                                <h2 class="text-lg font-extrabold text-gray-900 dark:text-white flex my-4 gap-2">
                                    Total:
                                    <span class="text-lg text-gray-500 dark:text-gray-400"> ${{ businessItem.totalRevenue }}</span>
                                </h2>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Finaliza graficos -->
            </div>
        </div>
    </AppLayout>
</template>

<style>
.main-class {
    max-height: 400px;
    overflow-y: auto;
}

.main-class::-webkit-scrollbar {
    width: 8px;
}

.main-class::-webkit-scrollbar-thumb {
    background-color: #223a59;
    border-radius: 4px;
}

.main-class::-webkit-scrollbar-track {
    background-color: #ddd;
    border-radius: 8px;
}
</style>