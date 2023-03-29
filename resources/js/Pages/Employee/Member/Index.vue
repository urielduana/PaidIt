<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";

const props = defineProps({
    employees: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Employee">
        <template #header>
            <h2>Employee</h2>
        </template>
        <div class="py-12">
            <pre>
            </pre>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <pre>
                        {{ employees }}
                    </pre>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
