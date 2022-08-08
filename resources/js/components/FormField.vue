<template>
    <input :type="type"
           class="intro-x login__input form-control py-3 px-4 border-gray-300 block"
           :class="[{
                'border-theme-24': error,
           }, $attrs.class]"
           :placeholder="placeholder"
           v-model="model"
           required
    >
    <div class="mt-1 text-theme-24" v-if="error">{{ error }}</div>
</template>

<script setup>
defineProps({
    type: {
        type: String,
        default: 'text'
    },
    error: String,
    placeholder: String,
    model: {
        type: String,
        required: true
    },
})
</script>
