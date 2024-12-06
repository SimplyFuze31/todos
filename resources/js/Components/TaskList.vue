<script setup>
import {Inertia} from "@inertiajs/inertia";
import TaskListItem from "./TaskListItem.vue";
import AddTaskForm from "./AddTaskForm.vue";

defineProps(['tasks','isAddTask'])

const emit = defineEmits(['update']);
const closeAddTaskForm = () => {
    emit('update:isAddTask', false); // Закриваємо форму
};
</script>

<template class="divide-y divide-gray-200 px-4">

    <ul class="flex flex-col gap-3.5 w-full sm:max-w-md m-auto">
        <AddTaskForm v-if="isAddTask" @close="closeAddTaskForm"></AddTaskForm>

        <TaskListItem v-for="task in tasks" :task = task></TaskListItem>



    </ul>
</template>

<style scoped>

</style>
