<script setup>
// import { reactive } from "vue";

// for use redirect proccess method post with router
// import { router } from '@inertiajs/vue3';

// use helper form from inertia for validation
import { useForm } from '@inertiajs/vue3';
import TextInput from '../Components/TextInput.vue';

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () => {
    // router.post('/register', form);
    form.post(route("register.process"), {
        onError: () => form.reset(),
    });
}
</script>

<template>

    <Head title="Register Page" />
    <div class="w-full flex flex-col space-y-5 justify-center items-center mt-5">
        <h1 class="text-2xl font-bold uppercase">Register Page</h1>
        <form @submit.prevent="submit" class="w-full max-w-md p-5 rounded-md shadow-lg bg-white border-2">
            <TextInput forLabel="name" nameLabel="Name" typeInput="text" v-model="form.name" idInput="name"
                placeInput="Full name" :message="form.errors.name" />
            <TextInput forLabel="email" nameLabel="Email" typeInput="email" v-model="form.email" idInput="email"
                placeInput="email@example.com" :message="form.errors.email" />
            <TextInput forLabel="password" nameLabel="Password" typeInput="password" v-model="form.password"
                idInput="password" placeInput="******" :message="form.errors.password" />
            <TextInput forLabel="password_confirmation" nameLabel="Confirm Password" typeInput="password"
                v-model="form.password_confirmation" idInput="password_confirmation" placeInput="******"
                :message="form.errors.password_confirmation" />
            <div class="w-full flex flex-col space-y-3 items-center">
                <button type="submit"
                    class="w-full outline-none bg-blue-600 flex items-center justify-center text-white uppercase font-medium transition duration-300 hover:bg-blue-700 focus:bg-blue-700 rounded-md shadow-sm h-11 disabled:bg-gray-500"
                    :disabled="form.processing">{{ form.processing ? 'Loading' : 'Register' }}</button>
                <p class="text-gray-600">Already have account?
                    <Link href="#"
                        class="text-blue-600 outline-none hover:underline hover:underline-offset-2 focus:underline focus:underline-offset-2">
                    Login.</Link>
                </p>
            </div>
        </form>
    </div>
</template>
