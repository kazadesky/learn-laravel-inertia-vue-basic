<script setup>
// import { reactive } from "vue";

// for use redirect proccess method post with router
// import { router } from '@inertiajs/vue3';

// use helper form from inertia for validation
import { useForm } from '@inertiajs/vue3';

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
            <div class="mb-3">
                <label for="name" class="font-medium block mb-2">Name</label>
                <input type="text" v-model="form.name" id="name"
                    class="outline-none rounded-md border-2 border-gray-200 px-3 h-12 w-full transition duration-300 focus:border-gray-300"
                    placeholder="Full name" />
                <small class="text-red-600" v-if="form.errors.name">{{ form.errors.name }}</small>
            </div>
            <div class="mb-3">
                <label for="email" class="font-medium block mb-2">Email</label>
                <input type="email" v-model="form.email" id="email"
                    class="outline-none rounded-md border-2 border-gray-200 px-3 h-12 w-full transition duration-300 focus:border-gray-300"
                    placeholder="email@example.com" />
                <small class="text-red-600" v-if="form.errors.email">{{ form.errors.email }}</small>
            </div>
            <div class="mb-3">
                <label for="password" class="font-medium block mb-2">Password</label>
                <input type="password" v-model="form.password" id="password"
                    class="outline-none rounded-md border-2 border-gray-200 px-3 h-12 w-full transition duration-300 focus:border-gray-300"
                    placeholder="******" />
                <small class="text-red-600" v-if="form.errors.password">{{ form.errors.password }}</small>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="font-medium block mb-2">Confirm Password</label>
                <input type="password" v-model="form.password_confirmation" id="password_confirmation"
                    class="outline-none rounded-md border-2 border-gray-200 px-3 h-12 w-full transition duration-300 focus:border-gray-300"
                    placeholder="******" />
                <small class="text-red-600" v-if="form.errors.password_confirmation">{{
                    form.errors.password_confirmation }}</small>
            </div>
            <div class="w-full flex flex-col space-y-3 items-center">
                <button type="submit"
                    class="w-full outline-none bg-blue-600 flex items-center justify-center text-white uppercase font-medium transition duration-300 hover:bg-blue-700 focus:bg-blue-700 rounded-md shadow-sm h-11"
                    :disabled="form.processing">Register</button>
                <p class="text-gray-600">Already have account?
                    <Link href="#"
                        class="text-blue-600 outline-none hover:underline hover:underline-offset-2 focus:underline focus:underline-offset-2">
                    Login.</Link>
                </p>
            </div>
        </form>
    </div>
</template>
