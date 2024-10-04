<script setup>
// personal use component in this page only
// import { Head } from '@inertiajs/vue3';

// import Demo from '../Layout/Demo.vue';

// default layout in this page
// defineOptions({ layout: Demo });
</script>

<template>

    <Head>
        <!-- this is personal title page -->
        <!-- and this standart include title in personal page -->
        <title>Home Page</title>
        <meta head-key="description" name="description" content="This is the home page meta.">
    </Head>
    <h1>Home Page</h1>
    <Link class="mt-[650px] block" :href="route('home')" preserve-scroll>Refresh</Link>
</template>
