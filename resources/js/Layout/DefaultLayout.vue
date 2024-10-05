<template>
    <div>
        <header class="w-full min-h-16 overflow-x-hidden shadow-lg">
            <nav class="w-full h-16 flex items-center justify-between px-12 bg-blue-500 border-y-2 border-blue-700 text-white">
                <h1 class="font-bold text-xl uppercase">Learn Inertia Vue</h1>
                <ul class="flex items-center space-x-3">
                    <li class="text-xl font-mono font-medium">
                        <Link :href="route('home.page')" preserve-scroll>Home</Link>
                    </li>
                    <li class="text-xl font-mono font-medium">
                        <Link :href="route('register.page')" preserve-scroll>Register</Link>
                    </li>
                    <li class="text-xl font-mono font-medium">
                        <Link :href="route('login.page')" preserve-scroll>Login</Link>
                    </li>
                </ul>
            </nav>
        </header>

        <main class="py-5 px-12">
            <slot/>
        </main>
    </div>
</template>
