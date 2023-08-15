<script setup>
const showModal = true;
</script>
<template>
    <div>
        <va-modal v-model="showModal" ok-text="Apply">
            <h3 class="va-h3">Title</h3>
            <p>
                Classic modal overlay which represents a dialog box or other
                interactive component, such as a dismissible alert, sub-window,
                etc.
            </p>
        </va-modal>
    </div>
</template>
