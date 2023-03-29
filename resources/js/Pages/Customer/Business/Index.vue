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
            <h2 class="font-semibold text-xlleading-tight text-xl">
                Available Business
            </h2>
        </template>
        <div class="py-9">
            <div class="max-w-80 mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">

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

                </div>
            </div>
        </div>
    </AppLayout>
</template>
