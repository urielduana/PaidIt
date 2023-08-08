<script setup>
import { computed, ref } from "vue";
import { router } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import CardCartItem from "@/Components/CardCartItem.vue";

// Definición de los props que se reciben desde el componente padre
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

// Función asincrónica para completar la orden
const completeOrder = async () => router.post("carts");

// Función para actualizar la cantidad de un ítem en el carrito
const updateItemQuantity = (id, quantity) => {
    // Llama a la API de Inertia para actualizar la cantidad en la base de datos
    router.put(`carts/${id}`, {
        quantity: quantity,
    });
};

// Función para eliminar un ítem del carrito
const deleteCartItem = async (id) => {
    // Realiza alguna acción al eliminar un ítem (en este caso, muestra un mensaje en la consola)
    console.log("Item deleted", id);
};

// Función para redondear y ajustar un valor
const roundAndAdjust = (value) => {
    const roundedValue = Math.round(value);
    const decimal = value - roundedValue;

    // Si el decimal es mayor a 0.5, suma 1 al valor redondeado
    if (decimal > 0.5) {
        return roundedValue + 1;
    } else {
        return roundedValue;
    }
};

// Referencia reactiva para el precio total de los ítems en el carrito
const quantityPrice = ref(
    computed(() => {
        let sum = 0;
        props.cartItems.forEach((item) => {
            sum += item.item.price * item.quantity;
        });
        return roundAndAdjust(sum);
    })
);

// Referencia reactiva para el crédito actual del usuario
const currentCredit = ref(1200);

// Referencia computada para calcular el crédito después de la compra
const afterCredit = computed(() => {
    const balance = currentCredit.value - quantityPrice.value;
    return balance < 0 ? "You don't have enough credit" : balance;
});
</script>
<template>
    <AppLayout title="Customer">
        <template #header>
            <h2>Shopping Carts</h2>
        </template>

        <div class="grid grid-cols-2">
            <div class="col-span-1">
                <va-scroll-container vertical class="w-1/2 max-h-[90%]">
                    <div v-for="item in cartItems" :key="item.id">
                        <div class="overflow-hidden flex flex-row-reverse">
                            <CardCartItem
                                :title="item.item.name"
                                :business="item.business.name"
                                :price="item.item.price"
                                :quantity="item.quantity"
                                image="http://thelionsroarmhsn.com/wp-content/uploads/2015/04/Pepperoni_1.jpg"
                                :update="
                                    (quantity) =>
                                        updateItemQuantity(item.id, quantity)
                                "
                                :delete="() => deleteCartItem(item.id)"
                            ></CardCartItem>
                            <!-- los puntos antes de title es para indicar la variable -->
                        </div>
                    </div>
                </va-scroll-container>
            </div>
            <div class="col-span-1">
                <div class="grid grid-cols-3">
                    <va-card tag="b" class="col-span-2 ml-3" color="#455467">
                        <va-card-title>
                            <p class="mt-2 text-2xl">Payment</p></va-card-title
                        >
                        <va-card-content>
                            <div class="grid grid-cols-3">
                                <p class="mt-2">Current Available</p>
                                <p class="text-center text-xl">&#8594;</p>
                                <p class="mt-2 radius">${{ currentCredit }}</p>
                            </div>
                            <va-divider class="my-4"> Total </va-divider>

                            <div class="grid grid-cols-3">
                                <p class="mt-2">SubTotal</p>
                                <p class="text-center text-xl">&#8594;</p>
                                <p class="mt-2 radius">${{ quantityPrice }}</p>
                            </div>
                            <div class="grid grid-cols-3">
                                <p class="mt-2">Taxes</p>
                                <p class="text-center text-xl">&#8594;</p>
                                <p class="mt-2">${{ quantityPrice }}</p>
                            </div>
                            <div class="grid grid-cols-3">
                                <p class="mt-2">Total</p>
                                <p class="text-center text-xl">&#8594;</p>
                                <p class="mt-2">${{ quantityPrice }}</p>
                            </div>

                            <va-divider class="my-4"> Balance </va-divider>

                            <div class="grid grid-cols-3">
                                <p class="mt-2">Balance After Payment</p>
                                <p class="text-center text-xl">&#8594;</p>
                                <p class="mt-2">{{ afterCredit }}</p>
                            </div>
                            <div class="flex flex-wrap justify-center mt-4">
                                <va-button
                                    :onclick="completeOrder"
                                    :disabled="!(afterCredit > 0)"
                                    >Pagar</va-button
                                >
                            </div>
                        </va-card-content>
                    </va-card>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
