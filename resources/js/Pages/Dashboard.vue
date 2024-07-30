<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({
    user: Array,
    users: Object,
})




</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 ">Dashboard</h2>
        </template>


        <div class="flex flex-wrap gap-3">
            <div class="card rounded-md p-10 grow glass bg-primary">

            </div>

            <div class="card rounded-md p-10 grow glass bg-secondary">

            </div>

            <div class="card rounded-md p-10 grow glass bg-accent">

            </div>

        </div>


    </AuthenticatedLayout>
</template>
