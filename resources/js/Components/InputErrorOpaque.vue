<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="message">
        <p class="text-sm text-[#ff2a2a] dark:text-red-400">
            {{ message }}
        </p>
    </div>
</template>
