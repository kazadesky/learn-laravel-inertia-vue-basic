<script setup>
defineProps({
    user: String,
})
</script>

<template>
    <!-- this is sorthand for use title in personal page but not desc meta -->

    <Head title="About Page" />
    <div>
        <h1>About Page from {{ user }}</h1>
    </div>
</template>
