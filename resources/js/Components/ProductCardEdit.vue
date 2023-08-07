<script setup>
import { defineProps, reactive, ref } from "vue";
import { useToast } from "vuestic-ui";
import { useForm } from "@inertiajs/vue3";
// Import image from public/img

// Image
const image = "https://source.unsplash.com/random?" + props.title;

// Toast
const { init, close, closeAll } = useToast();

// Optional receive data
const initToast = (data) => {
    init(data);
};
// Props
const props = defineProps({
    id: {
        type: Number,
        required: true,
    },
    image: {
        type: Number,
        required: false,
    },
    title: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        required: false,
    },
    price: {
        type: String,
        required: true,
    },
    stock: {
        type: Number,
        required: true,
    },
    description: {
        type: String,
        required: false,
    },
});

// Functions
const editProductModal = () => {
    console.log("Edit Product");
};
</script>
<template>
    <div class="bg-white dark:bg-paidit-600 my-8 mx-4 rounded-xl w-52">
        <div>
            <div
                class="-mt-10 lg:relative flex items-center justify-center mb-7"
            >
                <va-avatar v-if="!props.image" :src="image" size="10rem" />
                <va-avatar
                    v-else
                    :src="props.image"
                    size="10rem"
                    class="rounded-full"
                />
            </div>
        </div>
        <div class="">
            <div class="px-5">
                <va-divider class="" />
                <div class="py-2 flex-col space-y-2">
                    <p class="text-center font-bold text-2xl">
                        {{ title }}
                    </p>
                    <div class="text-center">
                        <va-badge
                            :text="type"
                            color="paidit-300"
                            class="mr-2"
                        />
                    </div>
                    <p
                        class="text-center font-light dark:text-stone-200 text-stone-600 text-base"
                    >
                        $ {{ price }}
                    </p>
                    <p
                        class="text-center font-light dark:text-stone-200 text-stone-600 text-base"
                    >
                        {{ stock }} Pieces Available
                    </p>
                    <p
                        class="text-center font-light dark:text-stone-400 text-stone-800 text-xs"
                    >
                        {{ description }}
                    </p>
                </div>

                <div class="flex items-center justify-center pb-4">
                    <!-- Verify if valueCounter is > than 0 if not disable -->
                    <va-button
                        size="medium"
                        color="yellow-500"
                        @click="editProductModal()"
                    >
                        <div
                            class="flex align-center justify-center text-white"
                        >
                            <ion-icon class="mr-2" name="create" />
                            <div>Edit Product</div>
                        </div>
                    </va-button>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.va-toast {
    border: 0;
}
</style>
