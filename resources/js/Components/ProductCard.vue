<script setup>
import { defineProps, ref } from "vue";

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

// Image
const image = "https://source.unsplash.com/random?" + props.title;

// Counter
const valueCounter = ref(0);

// Functions
const addProduct = () => {
    const data = {
        id: props.id,
        counter: valueCounter.value,
    };
    console.log(data);
    valueCounter.value = 0;
};
</script>
<template>
    <div class="max-w-min bg-white dark:bg-paidit-600 my-8 mx-4 rounded-xl">
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
        <div>
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
                    <p class="text-center font-light text-stone-200 text-base">
                        $ {{ price }}
                    </p>
                    <p class="text-center font-light text-stone-200 text-base">
                        {{ stock }} Pieces Available
                    </p>
                    <p class="text-center font-light text-stone-400 text-xs">
                        {{ description }}
                    </p>
                </div>
                <div class="flex items-center justify-center py-4">
                    <va-counter v-model="valueCounter" manual-input />
                </div>
                <div class="flex items-center justify-center pb-4">
                    <va-button
                        size="medium"
                        color="paidit-300"
                        @click="addProduct()"
                    >
                        <div class="flex text-paidit-600">
                            <div class="mr-2">
                                <ion-icon name="add-circle-outline" />
                            </div>
                            <div>Add Product</div>
                        </div>
                    </va-button>
                </div>
            </div>
        </div>
    </div>
</template>
