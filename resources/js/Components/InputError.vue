<script setup>
defineProps({
    message: String,
});
</script>

<template>
    <div v-show="message">
        <p class="mt-2 text-xs text-red-600 dark:text-red-400">
            {{ message }}
        </p>
    </div>
</template>
