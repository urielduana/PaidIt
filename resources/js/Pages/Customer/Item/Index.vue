<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useDark, useToggle } from "@vueuse/core";
import { reactive, watchEffect } from "vue";
import AddButton from "@/Components/AddButton.vue";

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


</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2>Available Products</h2>
        </template>
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                // print all items from de props
            </div>
        </div>
    </AppLayout>
</template>
