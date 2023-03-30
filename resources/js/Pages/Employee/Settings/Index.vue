<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
defineProps({
    bussines: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Settings">
        <template #header>
            <h2>Settings</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden shadow-xl sm:rounded-lg justify-center p-6"
                >
                    <div class="flex justify-center my-2">
                        <h1 class="font-bold text-2xl">Datos de la empresa</h1>
                    </div>
                    <div class="mb-6">
                        <label
                            for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >Name</label
                        >
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required
                            v-model="formData.name"
                        />
                    </div>
                    <div class="mb-6">
                            <label
                                for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Email</label
                            >
                            <input
                                type="email"
                                id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required
                                v-model="formData.email"
                            />
                        </div>
                        <div class="mb-6">
                            <label
                                for="phone"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Phone</label
                            >
                            <input
                                type="number"
                                id="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required
                                v-model="formData.phone"
                            />
                        </div>
                        <div class="mb-6">
                            <label
                                for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Address</label
                            >
                            <input
                                type="text"
                                id="address"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required
                                v-model="formData.address"
                            />
                        </div>

                    <button
                        @click="submitForm()"
                        type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
    data() {
        return {
            formData: {
                name: this.bussines.name,
                email: this.bussines.email,
                phone: this.bussines.phone,
                address: this.bussines.address,
            },
        };
    },
    mounted() {
    this.formData.name = this.bussines.name; // asignar el valor de la base de datos a la propiedad name en formData
    this.formData.email = this.bussines.email;
    this.formData.phone = this.bussines.phone;
    this.formData.address = this.bussines.address;
  },

    methods: {
        submitForm() {
            this.$inertia
                .post("/employee/settings", this.formData)
                .then(() => {
                    this.formData.name = null;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style>
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
