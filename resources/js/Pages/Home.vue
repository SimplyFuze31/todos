<script setup>

</script>

<template>

    <section class="container mx-auto  ">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
            <!--TO-DO-->
            <div class="h-64 rounded-lg bg-background">
                <nav class="flex items-center justify-between px-4 py-2 text-sm ">
                    <p class="mx-5 mt-2 text-center text-2xl font-extrabold
                     text-gray-950 tracking-wide">To Do</p>
                    <form method="post" >
                        <input type="submit" class="bg-primary text-white px-4 py-2 rounded"/>
                    </form>
                </nav>
            </div>
            <!--In progress-->
            <div class="h-64 rounded-lg bg-background">
                <nav class="flex items-center justify-between px-4 py-2 text-sm ">
                    <p class="mx-5 mt-2 text-center text-2xl font-extrabold
                     text-gray-950 tracking-wide">In Progress</p>
                </nav>
            </div>
            <!--Completed-->
            <div class="h-64 rounded-lg bg-background">
                <nav class="flex items-center justify-between px-4 py-2 text-sm ">
                    <p class="mx-5 mt-2 text-center text-2xl font-extrabold
                     text-gray-950 tracking-wide">Completed</p>
                </nav>
            </div>
        </div>
    </section>


</template>

<style scoped>

</style>
