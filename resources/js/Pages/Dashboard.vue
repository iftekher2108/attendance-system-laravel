<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({
    user: Array,
    users: Object,
})


const form = useForm({
    name: '',
    email: '',
    password: '',
})

const toggle = ref(true);

const submit = () => {
    form.post(
        route("user.data"),
        {
            onSuccess: () => form.reset()
        }
    )
}


const UserData = (userId) => {
    useForm({}).delete(route('user.delete', userId))
}


</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="card">
                            {{ user.name }} You're logged in!
                        </div>

                        <div class="card p-5 w-[50%] glass">
                            <form @submit.prevent="submit">
                                <div class="flex flex-col gap-5">
                                    <label for="">Name</label>
                                    <input type="text" v-model="form.name" required class="input input-primary border-none">
                                    <label for="">Email</label>
                                    <input type="text" v-model="form.email" required class="input input-primary border-none">
                                    <label for="">Password</label>
                                    <input type="text" v-model="form.password" required class="input input-primary border-none">
                                    <button class="btn glass bg-primary btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>

                        <div class="m-20">

                        </div>

                        <div class="flex flex-wrap">
                            <!-- <pre>
                             {{ users }}
                            </pre> -->

                            <button class="btn btn-primary" @click="toggle = ! toggle" >Toggle</button>

                            <Transition
                            enter-active-class="animate__animated animate__rotateIn"
                            leave-active-class="animate__animated animate__rotateOut"
                            >
                                 <h1 v-if="toggle">iftekher mahmud pervez</h1>
                            </Transition>


                        <TransitionGroup
                        enter-active-class="animate__animated animate__fadeInDown"
                        leave-active-class="animate__animated animate__fadeOutDown"
                        >
                            <div v-for="user in users" :key="user.id"

                                class="card flex flex-row items-center justify-evenly m-2 w-[25%] flex-grow glass">
                                <div class="card-body">
                                    <p>Id: {{ user.id }} </p>
                                    <p>Name: {{ user.name }} </p>
                                    <p>Email: {{ user.email }} </p>
                                </div>
                                <div>
                                    <button @click.prevent="UserData(user.id)" class="btn glass bg-error btn-error">delete</button>
                                </div>
                            </div>
                        </TransitionGroup>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
