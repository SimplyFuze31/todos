<script setup>
import {Inertia} from "@inertiajs/inertia";

const props = defineProps({
    task: Object,
})
import {Link} from '@inertiajs/vue3'



</script>

<template>
    <li class="flex justify-between  w-full px-4 py-2 ">
        <p>{{task.title}}</p>

        <Link :href="`/destroy/${task.id}`"
              as="button"
              method="delete"
              class="ms-2">Delete</Link>
    </li>
</template>

<style scoped>

</style>
