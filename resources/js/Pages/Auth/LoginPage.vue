<script setup>
import { useForm } from '@inertiajs/vue3';
import TextInput from '../Components/TextInput.vue';

const form = useForm({
    email: null,
    password: null,
    remember: false,
});

const submit = () => {
    form.post(route('login.process'), {
        onError: () => form.reset('password', 'remember'),
    });
}
</script>

<template>

    <Head title="Login Page" />
    <div class="w-full flex flex-col space-y-5 justify-center items-center mt-5">
        <h1 class="text-2xl font-bold uppercase">Login Page</h1>
        <form @submit.prevent="submit" class="w-full max-w-md p-5 rounded-md shadow-lg bg-white border-2">
            <TextInput forLabel="email" nameLabel="Email" typeInput="email" v-model="form.email" idInput="email"
                placeInput="email@example.com" :message="form.errors.email" />
            <TextInput forLabel="password" nameLabel="Password" typeInput="password" v-model="form.password"
                idInput="password" placeInput="******" :message="form.errors.password" />
            <div class="w-full flex items-center space-x-1 my-3">
                <input type="checkbox" v-model="form.remember" id="remember" class="size-3">
                <label for="remember">Remember me</label>
            </div>
            <div class="w-full flex flex-col space-y-3 items-center">
                <button type="submit"
                    class="w-full outline-none bg-blue-600 flex items-center justify-center text-white uppercase font-medium transition duration-300 hover:bg-blue-700 focus:bg-blue-700 rounded-md shadow-sm h-11 disabled:bg-gray-500"
                    :disabled="form.processing">{{ form.processing ? 'Loading' : 'Login' }}</button>
                <p class="text-gray-600">Need an account?
                    <Link :href="route('register.page')"
                        class="text-blue-600 outline-none hover:underline hover:underline-offset-2 focus:underline focus:underline-offset-2">
                    Register.</Link>
                </p>
            </div>
        </form>
    </div>
</template>
