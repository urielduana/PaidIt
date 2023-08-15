<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { ref } from "vue";

const props = defineProps({
    customer: {
        type: Object,
        required: true,
    },
});

const orders = ref(props.customer.customer__order);

// Recieve a string if "finished" return "success" if pending return "warning"
const stripeColor = (status) => {
    if (status === "finished") {
        return "success";
    } else if (status === "pending") {
        return "warning";
    }
};

const calculateTotal = (quantity, price) => {
    return quantity * price;
};
</script>

<template>
    <AppLayout :title="`Orders from ${customer.customer__user.name}`">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Orders from :
                <span class="text-blue-500 uppercase">{{
                    customer.customer__user.name
                }}</span>
            </h2>
        </template>
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div v-for="order in orders" :key="order.id" class="">
                    <va-card stripe :stripe-color="stripeColor(order.status)">
                        <va-card-title>
                            <h3
                                class="font-semibold text-lg text-gray-800 leading-tight"
                            >
                                Order no. {{ order.id }}
                            </h3>
                            <va-chip
                                :color="stripeColor(order.status)"
                                class="ml-2"
                            >
                                {{ order.status }}
                            </va-chip>
                        </va-card-title>
                        <va-card-content>
                            <div
                                v-for="item in order.order__order__item"
                                :key="item.id"
                                class="my-5"
                            >
                                <va-divider />

                                <h4>
                                    {{ item.order_item__item.name }}
                                </h4>
                                <div class="mx-3">
                                    <p>
                                        Quantity :
                                        {{ item.quantity }}
                                    </p>
                                    <p>
                                        Total : ${{
                                            item.order_item__item.price
                                        }}
                                    </p>
                                </div>
                            </div>
                        </va-card-content>
                    </va-card>
                </div>
            </div>
        </div>
        <pre>
            {{ orders }}
        </pre>
    </AppLayout>
</template>
