<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
import { useDark, useToggle } from "@vueuse/core";
import { reactive, watchEffect } from "vue";
import {
    PencilSquareIcon,
    MinusCircleIcon,
    EyeIcon,
} from "@heroicons/vue/24/solid";
import PrimaryButton from "@/Components/PrimaryButton.vue";

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
    employees: {
        type: Object,
        required: true,
    },
});

//Table
const columns = [
    {
        label: "Profile Photo",
        field: "image",
        width: "15%",
    },
    {
        label: "Name",
        field: "name",
    },
    {
        label: "Salary",
        field: "salary",
    },
    {
        label: "Email",
        field: "email",
    },
    {
        label: "",
        field: "actions",
    },
    {
        label: "Roles",
        field: "roles",
        hidden: true,
    },
];

const rows = props.employees.map((employee) => {
    return {
        id: employee.id,
        image: employee.profile_photo_url,
        name: employee.employee__user.name,
        salary: employee.salary,
        email: employee.employee__user.email,
        roles: employee.employee__user.roles.map((role) => {
            return role.name;
        }),
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
console.log(props.employees);
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
                        ref="myCustomTable"
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
                        <template #emptystate> Nothing to see here! </template>
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
                        <template #row-details="props">
                            <div class="flex items-center">
                                <div
                                    class="ml-5 flex items-center grow"
                                    v-if="props.row.roles[0]"
                                >
                                    <p class="text-lg font-semibold">Roles:</p>
                                    <p>{{ props.row.roles }}</p>
                                </div>
                                <div class="ml-5 flex items-center grow" v-else>
                                    <p class="text-lg font-semibold">Roles:</p>
                                    <p>No Roles</p>
                                </div>
                                <div class="mr-5">
                                    <button
                                        class="flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                    >
                                        <EyeIcon class="h-5 w-5 mr-1" />
                                        Roles
                                    </button>
                                </div>
                            </div>
                        </template>
                    </vue-good-table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
