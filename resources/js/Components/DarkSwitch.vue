<script setup>
import { useDark, useToggle } from "@vueuse/core";
import { reactive, watchEffect } from "vue";
const isDark = useDark();

const toggleDark = useToggle(isDark);
const state = reactive({
    darkMode: useDark().value,
});
watchEffect(() => {
    state.darkMode = useDark().value;
});
</script>
<template>
    <button
        @click="toggleDark()"
        id="theme-toggle"
        type="button"
        class="text-gray-500 dark:text-gray-400 focus:outline-none text-sm p-2.5"
    >
        <ion-icon
            v-if="!state.darkMode"
            name="moon"
            size="small"
            style="color: #aeb6bf"
            class="w-5 h-5"
        ></ion-icon>
        <ion-icon
            v-if="state.darkMode"
            name="sunny"
            size="small"
            style="color: #ffc300"
            class="w-5 h-5"
        ></ion-icon>
    </button>
</template>
