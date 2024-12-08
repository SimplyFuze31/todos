<script setup>

import TaskList from "../Components/TaskList.vue";
import { ref ,reactive } from 'vue';
import {Inertia} from "@inertiajs/inertia";
const props = defineProps({
    tasks: {
        type: Array,
        required: true
    }
});

const tasks = ref([...props.tasks]);

const isAddTask = ref(false);

</script>

<template>

    <section class="container mx-auto text-white ">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
            <!--TO-DO-->
            <TaskList :tasks="tasks" title="To Do" />

            <!--In progress-->
            <TaskList :tasks="tasks" title="In Progress" />

            <!--Completed-->
            <TaskList :tasks="tasks" title="Completed" />
        </div>
    </section>


</template>



<style scoped>

</style>
