<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? "inline-flex items-center px-1 pt-1 border-b-2 border-paidit-400 text-lg font-medium leading-5 text-paidit-400 focus:outline-none focus:border-paidit-400 transition duration-150 ease-in-out hover:text-paidit-300 hover:border-paidit-300"
        : "inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-lg font-medium leading-5 text-gray-200 hover:text-gray-300 hover:border-white focus:outline-none focus:text-gray-400 focus:border-gray-300 transition duration-150 ease-in-out";
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
