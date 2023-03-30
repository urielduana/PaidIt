<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useDark, useToggle } from "@vueuse/core";
import { reactive, watchEffect } from "vue";
import {
    PencilSquareIcon,
    MinusCircleIcon,
    EyeIcon,
} from "@heroicons/vue/24/solid";

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

//Props
const props = defineProps({
    items: Array,
    order_items: Array,
    orders: Array,
    users: Array,
});

//Table
const rows = props.orders.map((order) => {
    const orderItems = props.order_items.filter(
        (oi) => oi.Order_id === order.id
    );
    const items = orderItems.map((oi) =>
        props.items.find((item) => item.id === oi.Item_id)
    );
    const date = new Date(order.created_at);
    const formattedDate = `${date.getDate()}/${
        date.getMonth() + 1
    }/${date.getFullYear()} ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;

    return {
        id: order.id,
        total: order.total,
        status: order.status,
        description: order.description,
        created_at: formattedDate,
        items: items.map((item, index) => ({
            name: item.name,
            price: item.price,
            quantity: orderItems[index].quantity,
            total: orderItems[index].total,
            status: orderItems[index].status,
        })),
        user: props.users.find((user) => user.id === order.Customer_id).name,
    };
});

const columns = [
    {
        label: "",
        field: "id",
    },
    {
        label: "User",
        field: "user",
    },
    {
        label: "Total",
        field: "total",
    },
    {
        label: "Status",
        field: "status",
    },
    {
        label: "Fecha",
        field: "created_at",
    },
    {
        label: "",
        field: "actions1",
    },
    {
        label: "",
        field: "actions2",
    },
    {
        label: "Description",
        field: "description",
        width: "15%",
    },
    {
        label: "Items",
        field: "items",
        hidden: true,
    },
];

//Table Options
const paginationOptions = {
    enabled: true,
    perPage: 20,
    perPageDropdownEnabled: true,
};
const searchOptions = {
    enabled: true,
    skipDiacritics: true,
    placeholder: "Search...",
};
</script>

<template>
    <AppLayout title="Employee">
        <template #header>
            <h2>Employee</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <vue-good-table
                        :columns="columns"
                        :rows="rows"
                        max-height="500px"
                        max-width="100%"
                        :fixed-header="true"
                        :theme="state.tableMode"
                        :pagination-options="paginationOptions"
                        :search-options="searchOptions"
                        :enable-row-expand="true"
                    >
                    </vue-good-table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
