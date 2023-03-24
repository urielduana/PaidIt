<script setup>
import { defineProps } from 'vue'

const props = defineProps({
  title: {
    type: String,
    required: true,
  },
  filters: {
    type: Array,
    required: true,
  },
})
</script>

<template>
    <div class="flex items-center justify-between bg-gray-100 p-4">
      <h2 class="text-xl font-bold">{{ title }}</h2>
      <div class="flex space-x-4">
        <template v-for="(filter, index) in filters" :key="index">
          <select class="rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" v-model="filter.selected">
            <option v-for="(option, i) in filter.options" :key="i" :value="option">{{ option }}</option>
          </select>
        </template>
      </div>
    </div>
  </template>

  