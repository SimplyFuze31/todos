<script setup>
import {Inertia} from "@inertiajs/inertia";

const props = defineProps({
    task: Object,
})
import {Link} from '@inertiajs/vue3'



</script>

<template>
    <li class="border border-gray-400 w-full px-4 py-2 rounded-md">
        <p>{{task.title}}</p>

        <Link :href="`/destroy/${task.id}`" as="button" method="delete">Delete</Link>
    </li>
</template>

<style scoped>

</style>
