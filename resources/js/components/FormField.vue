<template>
    <input :type="type"
           class="intro-x login__input form-control py-3 px-4 border-gray-300 block"
           :class="[{
                'border-theme-24': error,
           }, $attrs.class]"
           :placeholder="placeholder"
           :value="modelValue"
           @input="$emit('update:modelValue', $event.target.value)"
    >
    <div class="mt-1 text-theme-24" v-if="error">{{ error }}</div>
</template>

<script setup>
defineProps({
    modelValue: {
        type: String,
        default: ""
    },
    type: {
        type: String,
        default: 'text'
    },
    error: String,
    placeholder: String,
})
</script>
