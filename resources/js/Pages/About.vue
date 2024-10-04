<script setup>
defineProps({
    user: String,
})
</script>

<template>
    <!-- this is sorthand for use title in personal page but not desc meta -->

    <Head :title="$page.component" />
    <div>
        <h1>About Page from {{ $page.props.auth.user }}</h1>
    </div>
</template>
