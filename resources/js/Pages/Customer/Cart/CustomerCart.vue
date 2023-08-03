<script setup>
import { router } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import CardCartItem from "@/Components/CardCartItem.vue";

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
    items: {
        type: Object,
        required: false,
    },
});
const completeOrder = async () => router.post("carts");
</script>
<template>
    <AppLayout title="Customer">
        <template #header>
            <h2>Shopping Carts</h2>
        </template>

        <div class="flex flex-row">
            <div class="basis-1/2">
                <va-scroll-container vertical class="w-1/2 max-h-[95%]">
                    <div v-for="item in items" :key="item.id">
                        <div class="overflow-hidden flex flex-row-reverse">
                            <CardCartItem
                                :title="item.name"
                                :business="item.business_id"
                                :price="item.price"
                            ></CardCartItem>
                            <!-- los puntos antes de title es para indicar la variable -->
                        </div>
                    </div>
                </va-scroll-container>
            </div>
            <div class="basis-1/2">
                <va-scroll-container vertical rtl class="w-1/2 max-h-[95%]">
                    <div>
                        <CardCartItem title="holaaaaaaaaaaaaaaa">
                        </CardCartItem>
                    </div>
                </va-scroll-container>
            </div>
        </div>

        <div class="flex gap-4"></div>
        <div>
            <!-- Botón para completar la orden -->
            <button @click="completeOrder">Completar Orden</button>
        </div>
    </AppLayout>
</template>
