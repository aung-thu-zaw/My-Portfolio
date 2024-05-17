<script setup>
import Navbar from '@/Components/Navbar.vue';
</script>

<template>
    <div class="max-h-screen overflow-scroll min-w-screen">
        <Navbar />

        <slot />
    </div>
</template>

<style>
body,
html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}
</style>
