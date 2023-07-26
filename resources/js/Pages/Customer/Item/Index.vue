<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useDark, useToggle } from "@vueuse/core";
import { reactive, watchEffect, defineProps, ref } from "vue";

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
    business: {
        type: Object,
        required: true,
    },
});

// Get unique Item Type
const getUniqueItemTypes = (data) => {
    uniqueItemTypes.value = [];
    for (const item of data) {
        const itemTypeId = item.item__item__type.id;
        const itemType = item.item__item__type.name;
        if (
            !uniqueItemTypes.value.some(
                (uniqueItemType) => uniqueItemType.text === itemType
            )
        ) {
            uniqueItemTypes.value.push({
                text: itemType,
                value: itemTypeId,
            });
        }
    }
    console.log(uniqueItemTypes.value.length);
};

// Counter
const valueCounter = ref(0);

// Tabs
const valueTab = ref(0);
const keyTabValue = ref(props.business[0].business__item);

// Select
const valueSelect = ref(null);
const uniqueItemTypes = ref([]);
getUniqueItemTypes(keyTabValue.value);

// Search
const valueSearch = ref("");

// Set KeyTabValue as the object clicked on the tab
const setKeyTabValue = (value) => {
    keyTabValue.value = value.business__item;
    getUniqueItemTypes(keyTabValue.value);
};
</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2>Available Products</h2>
        </template>
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <va-tabs v-model="valueTab" class="max-w-7xl">
                    <template #tabs>
                        <va-tab
                            v-for="tab in business"
                            :key="tab.id"
                            @click="setKeyTabValue(tab)"
                        >
                            {{ tab.name }}
                        </va-tab>
                    </template>
                    <div class="">
                        <!-- Title and Filter div -->
                        <div>
                            <!-- Title and Select Option div -->
                            <div class="">
                                <!-- Title -->
                                <div>
                                    <p
                                        class="font-semibold text-3xl leading-tight"
                                    >
                                        Choose your Products
                                    </p>
                                </div>
                                <!-- Select Option -->
                                <div>
                                    <p class="mr-3">Filter:</p>
                                    <va-select
                                        v-model="valueSelect"
                                        :options="uniqueItemTypes"
                                        class=""
                                        placeholder="Type of Product"
                                    />
                                </div>
                            </div>
                            <!-- Search div -->
                            <div>
                                <!-- Search -->
                                <div>
                                    <p class="">Search:</p>
                                    <va-input
                                        v-model="valueSearch"
                                        class="mb-6"
                                        label="Search by Name"
                                        placeholder="Search by Name"
                                    />
                                </div>
                            </div>
                        </div>
                        <!-- Cards v-for div -->
                        <div class="flex flex-wrap justify-center align-center">
                            <div
                                v-for="item in keyTabValue"
                                :key="item.id"
                                class="max-w-min bg-white dark:bg-paidit-600 my-8 mx-4 rounded-xl"
                            >
                                <div>
                                    <div
                                        class="-mt-10 lg:relative flex items-center justify-center mb-7"
                                    >
                                        <va-avatar
                                            src="https://cdn.kiwilimon.com/brightcove/8555/8555.jpg"
                                            size="10rem"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="px-5">
                                        <va-divider class="" />
                                        <div class="py-2 flex-col space-y-2">
                                            <p class="text-center font-bold">
                                                {{ item.name }}
                                            </p>
                                            <p
                                                class="text-center not-italic font-light"
                                            >
                                                $ {{ item.price }}
                                            </p>
                                            <p
                                                class="text-center not-italic font-light"
                                            >
                                                {{ item.stock }} Pieces
                                                Available
                                            </p>
                                        </div>
                                        <div
                                            class="flex items-center justify-center py-4"
                                        >
                                            <va-counter
                                                v-model="valueCounter"
                                                manual-input
                                            />
                                        </div>
                                        <div
                                            class="flex items-center justify-center pb-4"
                                        >
                                            <va-button
                                                size="medium"
                                                color="paidit-300"
                                            >
                                                <div
                                                    class="flex text-paidit-600"
                                                >
                                                    <div class="mr-2">
                                                        <ion-icon
                                                            name="add-circle-outline"
                                                        />
                                                    </div>
                                                    <div>Add Product</div>
                                                </div>
                                            </va-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </va-tabs>
            </div>
        </div>
    </AppLayout>
</template>
