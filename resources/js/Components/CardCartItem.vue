<script setup>
import SectionBorder from "./SectionBorder.vue";
import { useDark, useToggle } from "@vueuse/core";
import { reactive, watchEffect, defineProps, ref } from "vue";

// Dark Mode
const isDark = useDark();
const state = reactive({
    darkMode: useDark().value,
    tableMode: "",
});
watchEffect(() => {
    state.darkMode = useDark().value;
    if (state.darkMode) {
        state.tableMode = "nocturnal";
    } else {
        state.tableMode = "polar-bear";
    }
});
defineProps({
    title: {
        default: "Titulo de ejemplo, no haz enviado un titulo",
        type: String,
        required: true,
    },
    image: {
        default: "https://flowbite.com/docs/images/blog/image-1.jpg",
        type: String,
        required: false,
    },
    business: {
        default: "Business:Business 1",
        type: String,
        required: false,
    },
    quantity: {
        type: String,
        required: false,
    },
    price: {
        type: String,
        required: false,
    },
});
</script>
<template>
    <div class="m-4 relative max-w-xl bg-red-600">
        <!-- Div que contiene la imagen del item -->
        <div class="absolute w-1/5 top-1/4 bottom-1/4 ml-5">
            <img
                class="rounded-xl object-cover w-20 h-full md:w-32 lg:w-40 xl:w-48"
                src="https://flowbite.com/docs/images/blog/image-1.jpg"
                alt=""
            />
        </div>
        <!-- Div que contiene la información extra del item -->
        <div
            class="p-3 md:p-4 ml-10 md:ml-28 rounded-l-3xl rounded-r-lg bg-white border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 flex items-center"
        >
            <!-- Puedes utilizar clases de Tailwind CSS para establecer los estilos del borde y otros elementos -->
            <SectionBorder :padding="py - 2" />
            <div
                class="overflow-hidden flex flex-col flex-grow mb-10 ml-4 font-normal font-paidit-500"
            >
                <p class="text-gray-600">{{ business }}</p>
                <p class="text-gray-700 dark:text-gray-50">{{ title }}</p>
                <p class="text-gray-600">{{ price }}</p>
            </div>
            <div
                class="flex flex-col flex-grow ml-4 sm:ml-6 md:ml-8 lg:ml-10 xl:ml-12 mb-3 font-normal text-gray-700 dark:text-gray-400"
            >
                <p class="mb-2">Párr 1</p>
                <p class="mb-2">Párrafo 2</p>
                <p>Párrafo 3</p>
            </div>
            <div
                class="flex flex-col flex-grow ml-4 sm:ml-6 md:ml-8 lg:ml-10 xl:ml-12 mb-3 font-normal text-gray-700 dark:text-gray-400"
            >
                <p class="mb-2">Párrafo 1</p>
                <p class="mb-2">Párrafo 2</p>
                <p>Párrafo 3</p>
            </div>
            <!-- Aquí puedes agregar más contenido de la información extra si es necesario -->
        </div>
    </div>
</template>
