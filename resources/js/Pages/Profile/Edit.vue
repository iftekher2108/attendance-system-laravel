<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { useForm, usePage } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
const user = usePage().props.auth.user;

const form = useForm({
    picture: user.picture
})

const user_path = "/storage/user/";

const pic_change = (e) => {
    form.picture = e.target.files[0]
    form.post(route('picture.update'), {
        onSuccess: () => {
            location.reload();
            return form.reset();
        }
    })
}

</script>

<template>

    <Head title="Profile" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Profile</h2>
        </template>

        <div class="py-12">
            <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Profile Picture Information</h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Update your account's profile Picture information.
                </p>
            </header>
            <div class="p-4">
                <div class="max-w-xl">
                    <img :src="user_path + form.picture" class="size-48 rounded-lg" alt="picture">
                    <input type="file" @change="pic_change" class="mt-4 file-input border-none w-full file-input-primary">
                </div>

            </div>
            <hr class="opacity-25">
            <div class="p-4">
                <UpdateProfileInformationForm :must-verify-email="mustVerifyEmail" :status="status" class="max-w-xl" />
            </div>
            <hr class="opacity-25">
            <div class="p-4">
                <UpdatePasswordForm class="max-w-xl" />
            </div>
            <hr class="opacity-25">
            <div class="p-4">
                <DeleteUserForm class="max-w-xl" />
            </div>

        </div>
    </AuthenticatedLayout>
</template>
