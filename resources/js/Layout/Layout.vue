<script setup>
</script>

<template>

    <Head>
        <!-- default title for use this template but not create a title in personal page -->
        <title>My Apps</title>
        <meta head-key="description" name="description" content="This is the default meta description.">
    </Head>
    <div>
        <header class="bg-indigo-500 text-white">
            <nav class="flex items-center justify-between p-4 max-w-screen-lg mx-auto">
                <h1>{{ $page.props.auth.user }}</h1>
                <div class="space-x-6">
                    <Link :href="route('home')">Home</Link>
                    <Link :href="route('about')">About</Link>
                    <Link :href="route('contact')">Contact</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>
