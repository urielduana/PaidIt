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
    items: {
        type: Object,
        required: true,
    },
});

// Counter
const value = ref(0);
</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2>Available Products</h2>
        </template>
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <va-card>
                    <va-card-content>
                        <div>
                            <div>
                                <p>Salted Pasta with Mushroom Sauce</p>
                                <p>$2.79</p>
                                <p>11 Pieces Available</p>
                            </div>
                            <div>
                                <va-counter
                                    v-model="value"
                                    manual-input
                                    min="0"
                                />
                            </div>
                            <div>
                                <va-button>Add to Cart</va-button>
                            </div>
                        </div>
                    </va-card-content>
                </va-card>
            </div>
        </div>
    </AppLayout>
</template>
