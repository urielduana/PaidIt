<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useDark, useToggle } from "@vueuse/core";
import { defineProps, reactive, watchEffect } from "vue";
import {
    PencilSquareIcon,
    MinusCircleIcon,
    EyeIcon,
    PlusCircleIcon,
} from "@heroicons/vue/24/solid";

// Props
const props = defineProps({
    items: {
        type: Object,
        required: true,
    },
    item_types: {
        type: Object,
        required: true,
    },
});

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
    },
    {
        label: "Price",
        field: "price",
    },
    {
        label: "",
        field: "actions",
    },
];

const rows = props.items.map((item) => {
    return {
        image: item.image,
        name: item.name,
        category: item.item__item__type.name,
        stock: item.stock,
        price: item.price,
        actions: null,
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
    placeholder: "Search...",
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
                        :columns="columns"
                        :rows="rows"
                        max-height="500px"
                        max-width="100%"
                        :fixed-header="true"
                        :theme="state.tableMode"
                        :pagination-options="paginationOptions"
                        :search-options="searchOptions"
                    >
                        <template #emptystate> Nothing to see here! </template>
                        <template #table-actions>
                            <div class="mx-2">
                                <button
                                    @click=""
                                    class="d-flex justify-content-center align-items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                >
                                    <PlusCircleIcon
                                        class="h-5 w-5 dark:text-gray-100 text-gray-600 mr-2"
                                        aria-hidden="true"
                                    />
                                    Add New Product
                                </button>
                            </div>
                        </template>
                        <template #table-row="props">
                            <span
                                v-if="props.column.field == 'image'"
                                class="flex justify-center"
                            >
                                <img
                                    v-if="props.row.image"
                                    :src="props.row.image"
                                    class="h-10 w-10"
                                />
                            </span>
                            <span
                                v-if="props.column.field == 'actions'"
                                class="flex justify-between"
                            >
                                <button>
                                    <PencilSquareIcon
                                        class="h-6 w-6 dark:text-yellow-100 text-yellow-600 hover:text-yellow-700 dark:hover:text-yellow-200"
                                        aria-hidden="true"
                                    />
                                </button>
                                <button>
                                    <EyeIcon
                                        class="h-6 w-6 dark:text-sky-100 text-sky-600 hover:text-sky-700 dark:hover:text-sky-200"
                                        aria-hidden="true"
                                    />
                                </button>
                                <button>
                                    <MinusCircleIcon
                                        class="h-6 w-6 dark:text-red-100 text-red-600 hover:text-red-700 dark:hover:text-red-200"
                                        aria-hidden="true"
                                    />
                                </button>
                            </span>
                        </template>
                    </vue-good-table>
                    <pre>
                        {{ rows }}
                    </pre>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
