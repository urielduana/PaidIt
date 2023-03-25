<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useDark, useToggle } from "@vueuse/core";
import { reactive, watchEffect } from "vue";
const isDark = useDark();

const state = reactive({
  darkMode: useDark().value,
  tableMode: "",
})
watchEffect(() => {
  state.darkMode = useDark().value
  if (state.darkMode) {
    state.tableMode = "nocturnal";
  } else {
    state.tableMode = "polar-bear";
  }
})




const props = defineProps({
    items: {
        type: Object,
        required: true,
    },
});

const columns = [
    {
        label: "",
        field: "image",
        width: "10%",
    },
    {
        label: "Product",
        field: "name",
    },
    {
        label: "Category",
        field: "category",
    },
    {
        label: "Stock",
        field: "stock",
        type: "number",
    },
    {
        label: "Price",
        field: "price",
        type: "number",
    },
    {
        label: "Action",
        field: "action",
    },
    {
        label: "Description",
        field: "description",
        width: "30%",
    },
];

const rows = props.items.map((item) => {
    return {
        id: item.id,
        image: item.image,
        name: item.name,
        description: item.description,
        price: item.price,
        stock: item.stock,
        category: item.item__item__type.name,
    };
});

const paginationOptions = {
    enabled: true,
    perPage: 20,
    perPageDropdownEnabled: true,
};
const searchOptions = {
    enabled: true,
    skipDiacritics: true,
    placeholder: 'Search...',
};

console.log(rows);
</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2>
                Available Products
            </h2>
        </template>
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <div>
                        <vue-good-table
                            :columns="columns"
                            :rows="rows"
                            max-height="500px"
                            max-width="100%"
                            :theme="state.tableMode"
                            :pagination-options="paginationOptions"
                            :search-options="searchOptions"
                        >
                            <template #table-row="props">
                                <span v-if="props.column.field == 'price'">
                                    <span>${{ props.row.price }}</span>
                                </span>
                            </template>
                        </vue-good-table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
