<script setup>

defineProps(['task'])

</script>

<template>
    <li class="w-full bg-gray-100 p-3 rounded-md">
        {{task.title}}
    </li>
</template>

<style scoped>

</style>
