<script setup>
defineProps({
    contact: Number,
})
</script>

<template>
    <Head :title="$page.component"/>
    <div>
        <h1>Number contact: {{ $page.props.contact }}</h1>
    </div>
</template>
