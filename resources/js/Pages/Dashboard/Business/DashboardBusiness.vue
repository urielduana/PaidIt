<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import { useToast } from "vuestic-ui";




const modalShow = ref(false);
const employeeModalShow = ref(false);

const props = defineProps({
    Business: {
        type: Object,
        required: true,
    },
});

//  Form variables
const form = useForm({
    name: '',
    email: '',
    phone: '',
    address: '',
});



const submit = async () => {
    const { init } = useToast();

    try {
        const response = await form.post('/dashboard/businesses');

        if (response.status === 200) {
            // Mostrar toast de éxito y cerrar modal
            init({
                title: 'Business created successfully',
                description: `You added ${form.name} to the list`,
                color: 'success',
            });
            form.reset();
            modalShow.value = false;
        } else if (response.status === 422) {
            // Mostrar toast de error de validación
            init({
                title: 'Validation Error',
                description: 'Please check your form inputs.',
                color: 'danger',
            });
        } else {
            // Mostrar toast de error general
            init({
                title: 'Error',
                description: 'An error occurred while creating the business.',
                color: 'danger',
            });
        }
    } catch (error) {
        // Mostrar toast de error de red
        init({
            title: 'Network Error',
            description: 'Please check your internet connection.',
            color: 'danger',
        });
    }
};
const getRandomImage = () => {
    const width = 400;
    const height = 200;
    const randomNumber = Math.floor(Math.random() * 1000);
    return `https://picsum.photos/${width}/${height}?random=${randomNumber}`;
};


</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2>Business List</h2>
        </template>
        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Limite del contenido -->


                <!-- Search -->
                <div class="inline-block mr-3 ">
                    <p class="inline-block mr-3">Search:</p>
                    <va-input class="w-25" placeholder="Search by Name" />

                    <va-button class=" ml-3">Search</va-button>

                    <va-button class="ml-5 
                    " @click="modalShow = !modalShow">Create Business</va-button>

                </div>
                <div class="mt-8 mb-10">
                    <va-divider />
                </div>

                <!-- Cards v-for div -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4 lg:gap-6 p-5">

                    <!-- Iteramos sobre cada business y creamos una card para cada uno -->
                    <template v-for="business in Business" :key="business.id">

                        <va-card :style="{ backgroundColor: '#213958' }" class="text-center">
                            <div class="flex flex-col  h-full">
                                <va-image :src="getRandomImage()" class="h-52 object-cover rounded-t-lg flex-shrink-0" />
                                <div class="p-4">
                                    <div class="text-2xl font-bold text-white">
                                        <va-card-content>{{ business.name }}</va-card-content>
                                        <hr class="border-t-2 border-white w-42 mx-auto" />
                                    </div>
                                    <div class="text-lg text-justify font-mono text-white">
                                        <va-card-content class="mt-2">
                                            <p>Email: {{ business.email }}</p>
                                            <p>Phone: {{ business.phone }}</p>
                                            <p>Address: {{ business.address }}</p>
                                        </va-card-content>
                                    </div>
                                </div>
                                <div class="m-4">

                                    <va-button class="mr-6 mb-2" @click="showModalSizeLarge = !showModalSizeLarge">Employee
                                        List</va-button>
                                </div>
                            </div>
                        </va-card>

                    </template>
                </div>
                <!-- Modal de agregar business -->



                <va-modal v-model="modalShow" size="large" hide-default-actions="">
                    <div class="p-8">
                        <h1 class="text-center text-2xl font-bold mb-6">Create Business</h1>

                        <!-- Contenedor con display flex -->
                        <div class="flex flex-col space-y-6">
                            <!-- Inputs -->
                            <va-input
                v-model="form.name"
                type="text"
                label="Name"
                placeholder="Business Name"
                :error="form.errors.name ? true : false"
            />

            <va-input
                v-model="form.email"
                type="email"
                label="Email"
                placeholder="Business Email"
                :error="form.errors.email ? true : false" 
            />

            <va-input
                v-model="form.phone"
                type="text"
                label="Phone"
                placeholder="Business Phone"
                :error="form.errors.phone ? true : false"
            />

            <va-input
                v-model="form.address"
                type="text"
                label="Address"
                placeholder="Business Address"
                :error="form.errors.address ? true : false"
            />
                        </div>
                    </div>
                    <template #footer>
                        <div class="flex justify-center">
                            <va-button class="mr-2" @click="modalShow = false">Cancel</va-button>
                            <!-- Vinculamos el botón "Create" a la función submitForm -->
                            <va-button @click="submit" variant="primary">Create</va-button>
                        </div>
                    </template>
                </va-modal>

                <!--fin del Modal de agregar business -->


                <!-- Modal de ver empleados -->
                <va-modal v-model="employeeModalShow" size="large">
                    <va-tabs stateful grow>
                        <template #tabs>
                            <va-tab v-for="title in ['One', 'Two', 'Three']" :key="title" :name="title">
                                {{ title }}
                            </va-tab>
                        </template>
                    </va-tabs>
                </va-modal>
                <!-- Fin del modal de ver empleados -->


                <!-- Fin del contenido. -->
            </div>
        </div>
    </AppLayout>
</template>
<style>
.va-toast {
    border:0;
}
</style>