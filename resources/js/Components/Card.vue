<script setup>
defineProps({
    title: {
        default: 'Titulo de ejemplo, no haz enviado un titulo',
        type: String,
        required: true
    },
    image: {
        default:"https://flowbite.com/docs/images/blog/image-1.jpg",
        type: String,
        required: false
    },
    description: {
        default: 'Texto de ejemplo, no haz enviado una descripción',
        type: String,
        required: false
    },
    link: {
        type: String,
        required: false
    },
    linkText: {
        default: 'Enter to...',
        type: String,
        required: false
    }
});


</script>
<template>


<div class="max-w-sm border-gray-900 rounded-lg shadow dark:bg-gray-100 my-5 mx-4">
    <a :href="link">
        <img class="rounded-t-lg" :src="image" alt="" />
    </a>
    <div class="p-5">
        <a :href="link" class="block">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-90">
                {{ title }}
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-70">
            <slot name="description" />
        </p>
        <a v-if="link" :href="link" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            {{ linkText }}
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>

</template>