<script setup lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import ProfileSection from "@/Components/ProfileSection.vue";
import AboutMeSection from "@/Components/AboutMeSection.vue";
import ExperienceSection from "@/Components/ExperienceSection.vue";
import ProjectSection from "@/Components/ProjectSection.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Aung Thu Zaw" />

    <AppLayout>
        <section class="py-20">
            <div
                class="container relative flex flex-col items-start justify-between h-full mx-auto space-x-5 md:flex-row"
            >
                <ProfileSection />

                <div class="w-full h-full space-y-10 md:w-1/2">
                    <AboutMeSection />

                    <hr />

                    <ExperienceSection />

                    <hr />

                    <ProjectSection />
                </div>
            </div>
        </section>
    </AppLayout>
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
