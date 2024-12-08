<script setup>
defineProps(['task'])

</script>

<template>
    <li class="border border-gray-400 w-full px-4 py-2 rounded-md">
        <p>{{task.title}}</p>
    </li>
</template>

<style scoped>

</style>
