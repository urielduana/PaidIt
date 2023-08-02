<script setup>
import { router } from "@inertiajs/vue3";

const props = defineProps({
    user: {
        type: Object,
        required: true,
    },
    cart: {
        type: Object,
        required: false,
    },

    cartItems: {
        type: Object,
        required: false,
    },
    orderItems: {
        type: Object,
        required: false,
    },
});
const completeOrder = async () => router.post("carts");
</script>

<template>
    <div>
        <!-- Mostrar detalles del carrito y sus items aquí -->
        <h1>{{ cartItems }}</h1>
        <br />
        <br />
        <br />
        <br />
        <h1>{{ orderItems }}</h1>
        <!-- Botón para completar la orden -->
        <button @click="completeOrder">Completar Orden</button>
    </div>
</template>
