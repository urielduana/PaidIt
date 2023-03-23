<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Card from "../../../Components/Card.vue";
const props = defineProps({
    business: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Customer">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Available Business
            </h2>
        </template>
        <div class="flex flex-wrap justify-center">
            <div v-for="businesscard in business" :key="businesscard">
                <Card :title="businesscard.name">
                    <template #description> 
                        <h6 v-if="businesscard.email"><b>Email: </b> {{ businesscard.email }} </h6>
                        <h6 v-if="businesscard.phone"><b>Phone: </b> {{ businesscard.phone }} </h6>
                        <h6 v-if="businesscard.address"><b>Address: </b> {{ businesscard.address }} </h6>
                    </template>
                </Card>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                ></div>
            </div>
        </div>
    </AppLayout>
</template>
