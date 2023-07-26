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
    { amount: 1000, type: 'income' },
    { amount: 500, type: 'expense' },
    { amount: 2000, type: 'income' },
    { amount: 500, type: 'expense' },
    // ... más transacciones
];

// Función para normalizar los valores dentro de un rango específico
function normalizeValue(value, min, max) {
    return (value - min) / (max - min);
}

// Calculamos los totales de ingresos y gastos
const totalIncome = transactions.filter(transaction => transaction.type === 'income')
    .reduce((total, transaction) => total + transaction.amount, 0);

const totalExpenses = transactions.filter(transaction => transaction.type === 'expense')
    .reduce((total, transaction) => total + transaction.amount, 0);

// Encontramos el valor máximo de ingresos y gastos para normalizar los valores
const maxIncome = Math.max(totalIncome, totalExpenses);
const maxExpenses = maxIncome;

// Calculamos los porcentajes normalizados de ingresos y gastos
const incomePercentage = normalizeValue(totalIncome, 0, maxIncome) * 100;
const expensePercentage = normalizeValue(totalExpenses, 0, maxExpenses) * 100;
</script>

<template>
  <AppLayout title="Customer">
      <template #header>
          <h2 class="font-semibold text-xl leading-tight text-xl">Customer</h2>
      </template>
      <div class="py-12">
          <div class="flex justify-around py-6">
              <!-- Iniciar Tarjeta Info-Usuario-->
              <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532]">
                  <div class="flex flex-col items-center py-10 px-4">
                      <img
                          class="w-24 h-24 mb-3 rounded-full shadow-lg"
                          :src="user.profile_photo_path"
                          alt="user image"
                      />

                      <!-- Ingreso -->
                      <va-progress-bar
                          :model-value="incomePercentage"
                          size="large"
                          content-inside
                          color="primary"
                      >
                          Income
                      </va-progress-bar>

                      <!-- Egresos -->
                      <va-progress-bar
                          :model-value="expensePercentage"
                          size="large"
                          content-inside
                          color="danger"
                      >
                          Bills
                      </va-progress-bar>

                      <h5 class="mb-1 text-xl text-center font-extrabold text-gray-900 dark:text-white">
                          <!--{{ user.name }}-->
                          $1,500.00
                      </h5>
                      <span class="text-sm text-center text-gray-500 dark:text-gray-400">Total Revenue</span>
                      <div>
                          <h2 class="text-sm text-centerfont-bold">
                              {{ user.name }}
                          </h2>
                          <span class="font-normal">customer</span>
                      </div>
                      <div>
                          <h2>
                              {{ customer.guardian_name }}
                          </h2>
                          <span>Tutor</span>
                      </div>
                  </div>
              </div>
              <!-- Finaliza tarjeta Info-Usuario-->

              <!-- Inicia saldo -->
              <div class="flex items-center w-96 max-w-2xl bg-white border border-gray-200 rounded-lg shadow dark:bg-[#1C2532] dark:border-gray-700">
                  <div class="w-full text-center">
                      <h6 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                          Cuenta
                      </h6>
                      <p class="font-normal my-4 text-gray-700 dark:text-gray-400">Saldo disponible:</p>
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
