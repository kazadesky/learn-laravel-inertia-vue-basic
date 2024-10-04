<script setup>
const model = defineModel({
    type: null,
    required: true,
});

defineProps({
    nameLabel: {
        type: String,
        required: true,
    },
    forLabel: {
        type: String,
        required: true,
    },
    typeInput: {
        type: String,
        default: 'text',
    },
    idInput: {
        type: String,
        required: true,
    },
    placeInput: String,
    message: String,
});
</script>

<template>
    <div class="mb-3">
        <label :for="forLabel" class="font-medium block mb-2">{{ nameLabel }}</label>
        <input :type="typeInput" v-model="model" :id="idInput"
            class="outline-none rounded-md border-2 border-gray-300 px-3 h-12 w-full transition duration-300 focus:border-blue-600"
            :class="{ '!border-red-600': message }" :placeholder="placeInput" v-bind="$attrs" />
        <small class="text-red-600" v-if="message">{{ message }}</small>
    </div>
</template>
