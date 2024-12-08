<script setup>
import TaskListItem from "./TaskListItem.vue";
import AddTaskForm from "./AddTaskForm.vue";
import { ref } from 'vue';

defineProps(['tasks', 'title'])

const isShowInput = ref(false);
let showInput = () => {
    isShowInput.value = ! isShowInput.value;
};


</script>

<template>
    <div class="px-8 min-h-72 h-auto rounded-lg border border-gray-600">
        <nav class="pt-4 space-y-4">
            <div class="flex items-center justify-between  text-sm ">
                <p class="mt-2 text-center text-2xl font-extrabold
                        tracking-wide">{{ title }}</p>
                <button @click="showInput"
                        class="bg-white text-black px-4 py-2 rounded-md hover:bg-gray-600 hover:text-white"
                >
                    {{ isShowInput ? 'Hide' : 'Add Task' }}
                </button>
            </div>
            <div class="pb-2">
                <AddTaskForm v-if="isShowInput" @close="showInput"></AddTaskForm>
            </div>
        </nav>
        <div>
            <ul class="flex flex-col w-full m-auto space-y-2">

                <TaskListItem v-for="task in tasks" :key="task.id"  :task=task></TaskListItem>
            </ul>
        </div>

    </div>
</template>

<style scoped>

</style>
