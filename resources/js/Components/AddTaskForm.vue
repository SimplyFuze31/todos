<script setup>
import {Inertia} from "@inertiajs/inertia";
import {reactive, toRefs} from "vue";

let form = reactive({
    title: '',
    type:'',
})

const updateTask = () => {
    if (form.title.trim() !== '') {
        Inertia.post("/", { title: form.title });
        form.title = '';
        emit('close');
    } else {
        emit('close');
    }
};

const emit = defineEmits(['close']);
</script>

<template>
    <li class="w-full bg-gray-100 p-3 rounded-md">
        <input @blur="updateTask" type="text" v-model="form.title" placeholder="Enter task" required>
    </li>
</template>

<style scoped>

</style>
