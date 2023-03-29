<template>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center"
    >
        <div>
            <slot name="logo" />
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg border-2 border-gray-300 dark:border-gray-600"
        >
            <slot />
        </div>
    </div>
</template>
