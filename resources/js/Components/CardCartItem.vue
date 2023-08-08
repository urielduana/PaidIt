<script setup>
import { useDark, useToggle } from "@vueuse/core";
import { reactive, watchEffect, defineProps, ref, computed } from "vue";
import DangerButton from "./DangerButton.vue";

// Estado reactiva para el modo oscuro
const isDark = useDark();
const state = reactive({
    darkMode: useDark().value,
    tableMode: "",
});

// Observa el cambio en el modo oscuro y ajusta el estado
watchEffect(() => {
    state.darkMode = useDark().value;
    if (state.darkMode) {
        state.tableMode = "nocturnal";
    } else {
        state.tableMode = "polar-bear";
    }
});

// Definición de props del componente
const props = defineProps({
    title: {
        default: "Sample Title: No title provided",
        type: String,
        required: true,
    },
    image: {
        default: "https://flowbite.com/docs/images/blog/image-1.jpg",
        type: String,
        required: false,
    },
    business: {
        default: "Business: Business 1",
        type: String,
        required: false,
    },
    quantity: {
        type: Number,
        required: false,
    },
    price: {
        type: String,
        required: false,
    },
    update: {
        default: () => console.log("You're missing a function"),
        type: Function,
        required: true,
    },
    delete: {
        default: () => console.log("You're missing a function"),
        type: Function,
        required: true,
    },
});

// Referencia reactiva para la cantidad de ítems
const quantityItem = ref(props.quantity);

// Maneja el evento de cambio de cantidad
const handleQuantityInput = (event) => {
    const newQuantity = parseInt(event.target.value);
    if (!isNaN(newQuantity)) {
        quantityItem.value = Math.max(newQuantity, 1);
        props.update(quantityItem.value);
    }
};

// Calcula el precio total basado en la cantidad de ítems y el precio por ítem
const quantityPrice = computed(() => quantityItem.value * props.price);
</script>

<template>
    <div class="m-4 relative max-w-xl">
        <!-- Div que contiene la imagen del item -->
        <div class="absolute grid grid-cols-8">
            <img
                class="col-start-2 ml-3 mt-8 rounded-xl object-cover"
                :src="image"
                alt="image"
            />
        </div>
        <!-- Div que contiene la información extra del item -->

        <div class="grid grid-cols-8">
            <div class="col-span-1"></div>
            <div
                class="col-start-3 col-end-9 grid grid-cols-12 rounded-l-3xl rounded-r-lg border border-gray-200 hover:bg-gray-100 bg-gray-300 dark:bg-paidit-900"
            >
                <!-- Puedes utilizar clases de Tailwind CSS para establecer los estilos del borde y otros elementos -->
                <div
                    class="col-span-5 grid grid-cols-8 ml-2 font-normal font-paidit-500"
                >
                    <div class="col-start-2 col-end-9 mt-3">
                        <p class="text-gray-500">Business: {{ business }}</p>
                        <p
                            class="text-gray-700 row-start-3 dark:text-gray-50 mb-2"
                        >
                            {{ title }}
                        </p>
                        <p class="text-gray-500 row-start-4">${{ price }}</p>
                    </div>
                </div>
                <div
                    class="col-span-5 grid grid-cols-12 justify-items-center items-center font-normal text-gray-700 dark:text-gray-400"
                >
                    <input
                        v-model="quantityItem"
                        @input="handleQuantityInput"
                        class="col-span-3 w-full px-1 py-2 border-transparent rounded-lg focus:outline-none focus:ring focus:border-blue-300 text-center dark:bg-paidit-1000"
                        maxlength="2"
                        type="number"
                    />

                    <!-- Flecha indicando la operación -->
                    <div class="col-span-3 mx-1 text-gray-500 text-2xl">
                        &#8594;
                    </div>
                    <input
                        v-model="quantityPrice"
                        class="col-span-5 w-full px-1 py-2 border-transparent rounded-lg focus:outline-none focus:ring focus:border-blue-300 text-center dark:bg-paidit-1000"
                        :disabled="true"
                        type="number"
                    />
                </div>
                <div
                    class="col-span-2 flex font-normal text-gray-700 dark:text-gray-400"
                >
                    <DangerButton
                        :onclick="delete"
                        class="bg-red-500 w-10 h-28 rounded-lg"
                    >
                        clear</DangerButton
                    >
                </div>
                <!-- Aquí puedes agregar más contenido de la información extra si es necesario -->
            </div>
        </div>
    </div>
</template>
