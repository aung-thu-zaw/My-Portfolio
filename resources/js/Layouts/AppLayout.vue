<script setup lang="ts">
import Navbar from "@/Components/Navbar.vue";
import ResumeButton from "@/Components/ResumeButton.vue";
import { onMounted } from "vue";
import Spotlight from "@/Components/Spotlight.vue";
import { type IStaticMethods } from "preline/preline";

declare global {
    interface Window {
        HSStaticMethods: IStaticMethods;
    }
}

onMounted(() => {
    setTimeout(() => {
        window.HSStaticMethods.autoInit();
    }, 100);
});
</script>

<template>
    <div class="max-h-screen overflow-scroll min-w-screen">
        <div class="fixed z-50 block bottom-10 right-6 md:hidden">
            <ResumeButton />
        </div>

        <Navbar />
        <Spotlight />

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
