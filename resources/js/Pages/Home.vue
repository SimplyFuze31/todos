<script setup>

import TaskList from "../Components/TaskList.vue";

const props = defineProps({
    tasks: {
        type: Array,
        required: true
    }
});


</script>

<template>
    <section class="container mx-auto text-white ">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
            <!--TO-DO-->
            <TaskList :tasks="tasks.filter(task => task.type === 'To Do')" title="To Do" />

            <!--In progress-->
            <TaskList :tasks="tasks.filter(task => task.type === 'In Progress')" title="In Progress" />

            <!--Completed-->
            <TaskList :tasks="tasks.filter(task => task.type === 'Completed')" title="Completed" />
        </div>
    </section>
</template>



<style scoped>

</style>
