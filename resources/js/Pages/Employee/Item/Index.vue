<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import DialogModal from "@/Components/DialogModal.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import DangerButton from "@/Components/PrimaryButton.vue";
import TextArea from "@/Components/TextArea.vue";
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

//Form
const form = reactive({
    name: "",
    description: "",
    price: "",
    stock: "",
    item_type_id: "",
    image: "",
});

// Reactive
const state = reactive({
    darkMode: useDark().value,
    tableMode: "",
    itemSelected: null,
    modalEdit: false,
    modalDelete: false,
    modalView: false,
});

// Modals
function openModalEdit(item) {
    state.itemSelected = item;
    state.modalEdit = true;
    console.log(state.itemSelected);
}

function openModalDelete(item) {
    state.itemSelected = item;
    state.modalDelete = true;
}

function openModalView(item) {
    state.itemSelected = item;
    state.modalView = true;
}

// Dark Mode
const isDark = useDark();
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
        id: item.id,
        image: item.image,
        name: item.name,
        category: item.item__item__type.name,
        stock: item.stock,
        price: item.price,
        actions: null,
        description: item.description,
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
                                        @click="openModalEdit(props.row)"
                                    />
                                </button>
                                <button>
                                    <EyeIcon
                                        class="h-6 w-6 dark:text-sky-100 text-sky-600 hover:text-sky-700 dark:hover:text-sky-200"
                                        aria-hidden="true"
                                        @click="openModalView(props.row)"
                                    />
                                </button>
                                <button>
                                    <MinusCircleIcon
                                        class="h-6 w-6 dark:text-red-100 text-red-600 hover:text-red-700 dark:hover:text-red-200"
                                        aria-hidden="true"
                                        @click="openModalDelete(props.row)"
                                    />
                                </button>
                            </span>
                        </template>
                    </vue-good-table>
                </div>
            </div>
        </div>
    </AppLayout>

    <!-- Modals for CRUD -->

    <!-- Edit Modal -->
    <DialogModal
        v-if="state.modalEdit"
        :show="state.modalEdit"
        @close="state.modalEdit = false"
    >
        <template #title>Edit: {{ state.itemSelected.name }} ({{ state.itemSelected.id }})</template>
        <template #content>
            <div class="mb-4">
                <InputLabel for="name" value="Name" />
                <div class="mt-1">
                    <TextInput
                        placeholder="Name"
                        v-model="form.name"
                        name="name"
                        id="name"
                        :value="state.itemSelected.name"
                    />
                </div>
            </div>
            <div class="mb-4">
                <InputLabel for="price" value="Price" />
                <div class="mt-1">
                    <TextInput
                        placeholder="Price"
                        v-model="form.price"
                        name="price"
                        id="price"
                        :value="state.itemSelected.price"
                    />
                </div>
            </div>
            <div class="mb-4">
                <InputLabel for="stock" value="Stock" />
                <div class="mt-1">
                    <TextInput
                        placeholder="Stock"
                        v-model="form.stock"
                        name="stock"
                        id="stock"
                        :value="state.itemSelected.stock"
                    />
                </div>
            </div>
            <div class="mb-4">
                <InputLabel for="image" value="Image" />
                <div class="mt-1">
                    <TextInput
                        placeholder="Image"
                        v-model="form.image"
                        name="image"
                        id="image"
                        :value="state.itemSelected.image"
                    />
                </div>
            </div>
            <div class="mb-4">
                <InputLabel for="description" value="Description" />
                <div class="mt-1">
                    <TextArea
                        placeholder="Description"
                        v-model="form.description"
                        name="description"
                        id="description"
                        :value="state.itemSelected.description"
                        rows="5"
                    />
                </div>
            </div>
        </template>
        <template #footer>
            <PrimaryButton @click="updateProduct">Update</PrimaryButton>
        </template>
    </DialogModal>

    <!-- Delete Modal -->
    <DialogModal
        v-if="state.modalDelete"
        :show="state.modalDelete"
        @close="state.modalDelete = false"
    >
        <template #title>Delete: {{ state.itemSelected.name }} ({{ state.itemSelected.id }})</template>
        <template #content>
            <p>Are you sure you want to delete this product?</p>
        </template>
        <template #footer>
            <DangerButton @click="deleteProduct">Delete</DangerButton>
        </template>
    </DialogModal>

    <!-- View Modal -->
    <DialogModal
        v-if="state.modalView"
        :show="state.modalView"
        @close="state.modalView = false"
    >
        <template #title>View: {{ state.itemSelected.name }} ({{ state.itemSelected.id }})</template>
        <template #content>
            <div class="mb-4">
                <InputLabel for="name" value="Name:" />
                <div class="mt-1">
                    <p class="text-gray-900 dark:text-gray-100">
                        {{ state.itemSelected.name }}
                    </p>
                </div>
            </div>
            <div class="mb-4">
                <InputLabel for="price" value="Price:" />
                <div class="mt-1">
                    <p class="text-gray-900 dark:text-gray-100">
                        {{ state.itemSelected.price }}
                    </p>
                </div>
            </div>
            <div class="mb-4">
                <InputLabel for="stock" value="Stock:" />
                <div class="mt-1">
                    <p class="text-gray-900 dark:text-gray-100">
                        {{ state.itemSelected.stock }}
                    </p>
                </div>
            </div>
            <div class="mb-4">
                <InputLabel for="image" value="Image:" />
                <div class="mt-1">
                    <p class="text-gray-900 dark:text-gray-100">
                        {{ state.itemSelected.image }}
                    </p>
                </div>
            </div>
            <div class="mb-4">
                <InputLabel for="description" value="Description:" />
                <div class="mt-1">
                    <p class="text-gray-900 dark:text-gray-100">
                        {{ state.itemSelected.description }}
                    </p>
                </div>
            </div>
        </template>
    </DialogModal>
</template>
