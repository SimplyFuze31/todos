<script setup>
import {Inertia} from "@inertiajs/inertia";
import {reactive} from "vue";
const props = defineProps(['type']);
const emit = defineEmits(['close']);
let form = reactive({
    title: '',
})
const addTask = () => {
    Inertia.post("/", { title: form.title, type: props.type });
    emit('close');
};


</script>

<template>

    <form @submit.prevent="addTask" class="flex justify-between">
        <input type="text"
               v-model="form.title"
               placeholder="Enter task"
               required
               class="w-full p-2 bg-white border border-gray-200 rounded-s-md text-black">

        <button type="submit" class="bg-white text-black px-4 py-2 rounded-e-md hover:bg-gray-600 hover:text-white">Add</button>
    </form>


</template>

<style scoped>

</style>
