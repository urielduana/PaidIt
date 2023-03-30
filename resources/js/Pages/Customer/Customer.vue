<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    user: {
        type: Object,
        required: true,
    },
    customer: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2 class="font-semibold text-xlleading-tight text-xl">Customer</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center m-12">
                    <!-- Iniciar Tarjeta Info-Usuario-->
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    >
                        <div class="flex flex-col items-center py-10 px-4">
                            <img
                                class="w-24 h-24 mb-3 rounded-full shadow-lg"
                                :src="user.profile_photo_path"
                                alt="user image"
                            />
                            <h5
                                class="mb-1 text-xl text-center font-medium text-gray-900 dark:text-white"
                            >
                                {{ user.name }}
                            </h5>
                            <span
                                class="text-sm text-center text-gray-500 dark:text-gray-400"
                                >Cliente</span
                            >

                            <h2 class="text-sm text-center my-4 font-bold flex gap-2">
                                Titular:
                                <h2 class="font-normal">
                                    {{ customer.guardian_name }}
                                </h2>
                            </h2>
                        </div>
                    </div>
                    <!-- Finaliza tarjeta Info-Usuario-->

                    <!-- Inicia saldo -->
                    <div
                        class="flex items-center w-96 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    >
                        <div class="w-full text-center">
                            <h6
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                            >
                                Cuenta
                            </h6>
                            <p
                                class="font-normal my-4 text-gray-700 dark:text-gray-400"
                            >
                                Saldo disponible:
                            </p>
                            <h2 class="my-4 text-center font-bold">
                                $ {{ customer.balance }}
                            </h2>
                            <div class="flex justify-center">
                                <button
                                    @click="showModal = true"
                                    type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                >
                                    Depositar
                                </button>

                                <Modal
                                    :show="showModal"
                                    @close="showModal = false"
                                    :max-width="modalMaxWidth"
                                    :closeable="modalCloseable"
                                >
                                    <form
                                        class="space-y-6"
                                        action="/customer"
                                        @submit.prevent="submitForm"
                                    >
                                        <h5
                                            class="text-xl font-medium text-gray-900 dark:text-white text-center"
                                        >
                                            Depositar
                                        </h5>
                                        <div>
                                            <label
                                                for="cantidad"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                >Cantidad</label
                                            >
                                            <input
                                                type="number"
                                                name="cantidad"
                                                id="cantidad"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="00.00"
                                                required
                                                v-model="formData.cantidad"
                                            />
                                        </div>
                                        <button
                                            type="submit"
                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        >
                                            Enviar
                                        </button>
                                    </form>
                                </Modal>
                            </div>
                        </div>
                    </div>
                    <!-- Finaliza saldo -->
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import Modal from "../../Components/Modal.vue";

export default {
    components: {
        Modal,
    },

    data() {
        return {
            showModal: false,
            modalMaxWidth: "2xl",
            modalCloseable: true,
            formData: {
                cantidad: null,
            },
        };
    },

    methods: {
        submitForm() {
            // Envía los datos al backend utilizando Inertia
            this.$inertia
                .post("/customer", this.formData)
                .then(() => {
                    // Actualiza los datos en el frontend
                    this.formData.cantidad = null;
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
