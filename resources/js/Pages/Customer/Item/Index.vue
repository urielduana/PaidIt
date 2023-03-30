<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useDark, useToggle } from "@vueuse/core";
import { reactive, watchEffect } from "vue";
import { groupBy } from "lodash";
import { onMounted } from "vue";

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


// Props
const props = defineProps({
    items: {
        type: Object,
        required: true,
    },
});

// Table
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
const rows = Object.values(
    groupBy(props.items, (item) => item.item__business.name)
).map((group) => ({
    mode: "span",
    label: group[0].item__business.name,
    children: group.map((item) => ({
        id: item.id,
        image: item.image,
        name: item.name,
        description: item.description,
        price: item.price,
        stock: item.stock,
        category: item.item__item__type.name,
    })),
}));
const paginationOptions = {
    enabled: false,
    perPage: 20,
    perPageDropdownEnabled: true,
};
const searchOptions = {
    enabled: true,
    skipDiacritics: true,
    placeholder: "Search...",
};
const groupOptions = {
    enabled: true,
    collapsable: true,
};
</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2>Available Products</h2>
        </template>
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                        <vue-good-table
                            ref="myCustomTable"
                            :columns="columns"
                            :rows="rows"
                            max-height="500px"
                            max-width="100%"
                            :fixed-header="true"
                            :theme="state.tableMode"
                            :pagination-options="paginationOptions"
                            :search-options="searchOptions"
                            :group-options="groupOptions"
                        >
                            <template #emptystate>
                                Nothing to see here!
                            </template>
                            <template #table-actions>
                                <div>
                                    <button
                                        @click="$refs.myCustomTable.expandAll()"
                                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    >
                                        Expand All
                                    </button>
                                    <button
                                        @click="
                                            $refs.myCustomTable.collapseAll()
                                        "
                                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    >
                                        Collapse All
                                    </button>
                                </div>
                            </template>
                            <template #table-row="props">
                                <span
                                    v-if="props.column.field == 'image'"
                                    class="flex justify-center"
                                >
                                    <img
                                        :src="props.row.image"
                                        class="h-10 w-10"
                                    />
                                </span>
                                <span v-if="props.column.field == 'price'">
                                    <span>${{ props.row.price }}</span>
                                </span>
                            </template>
                            <template #table-header-row="props">
                                <span class="my-fancy-class">
                                    {{ props.row.label }}
                                </span>
                            </template>
                        </vue-good-table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
    mounted() {
        this.$refs.myCustomTable.expandAll();
    },
    // ...
};
</script>
