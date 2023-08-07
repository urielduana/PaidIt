<script setup>
import { defineProps, reactive, ref } from "vue";
import AddProductModal from "@/Components/AddProductModal.vue";

// Ref
const showModal = ref(false);

const addProductModal = () => {
    console.log("Add Product");
    showModal.value = true;
    return AddProductModal;
};
</script>
<template>
    <div
        @click="showModal = true"
        class="cursor-default flex align-center justify-center text-center hover:opacity-80 dark:active:opacity-100 active:bg-yellow-600 bg-yellow-500 dark:bg-paidit-600 my-8 mx-4 rounded-xl w-52 border-2 border-stone-300 dark:border-yellow-500 border-dashed dark:text-yellow-500"
        @click="addProductModal()"
    >
        <div>
            <ion-icon name="add-outline" size="large"></ion-icon>
            <div class="min-h-max p-6">Add New Product</div>
        </div>
        <va-modal
            v-model="showModal"
            max-height="500"
            ok-text="Confirm"
            fixed-layout
        >
            <div>
                <h3 class="va-h3">Add Products</h3>
                <p class="my-4">
                    Add products to your business. Fill in the details below and
                    click on the confirm button.
                </p>
            </div>
            <va-divider class="my-4" />
            <div>
                <va-form class="flex flex-col gap-6" ref="formRef">
                    <va-input
                        :rules="[
                            (value) =>
                                (value && value.length > 0) ||
                                'First name is required',
                        ]"
                        label="Name"
                    />

                    <va-input
                        :rules="[
                            (value) =>
                                (value && value.length > 0) ||
                                'Last name is required',
                        ]"
                        label="Last Name"
                    />

                    <va-date-input
                        :rules="[(v) => validateBirthday(v)]"
                        label="Birth Date"
                        manual-input
                    />

                    <va-select
                        :options="countries"
                        :rules="[
                            (v) => v || 'Field is required',
                            (v) =>
                                v.value === 'ua'
                                    ? 'Delivery currently unavailable in your country'
                                    : undefined,
                        ]"
                        label="Country"
                    />

                    <va-slider
                        :min="1"
                        :max="100"
                        :rules="[
                            (v) => v || 'Field is required',
                            (v) =>
                                (form.country === 'us' && v > 20) ||
                                'Package to US can not be more than 20kg',
                        ]"
                        label="Weight, kg"
                    />

                    <div>
                        <span class="va-title">Payment method</span>
                        <va-option-list
                            :options="['Visa', 'MasterCard', 'PayPal']"
                            type="radio"
                        />
                    </div>

                    <va-checkbox
                        :rules="[
                            (v) =>
                                v || 'You must agree with terms and conditions',
                        ]"
                        label="I'm okay if you lose my package"
                    />
                </va-form>
            </div>
            <va-data-table :items="items">
                <template #cell(img)="{ rowData }">
                    <va-avatar :src="rowData.img" />
                </template>
            </va-data-table>
        </va-modal>
    </div>
</template>
