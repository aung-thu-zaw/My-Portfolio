<script setup lang="ts">
import ProjectCard from "@/Components/ProjectCard.vue";
</script>

<template>
    <div class="space-y-2.5">
        <div class="space-y-2">
            <h4 class="text-xl font-extrabold tracking-wide text-lightText">
                <span class="text-sm text-cyan-300 font-fira">03. </span>
                Projects
            </h4>

            <p class="text-sm font-medium leading-6 text-slate-400">
                Here are some of the projects I've worked on, showcasing my
                skills in front-end and back-end development using Vue.js and
                Laravel. Each project highlights my ability to create dynamic,
                responsive, and user-friendly web applications. Feel free to
                explore and see how I can help bring your ideas to life.
            </p>
        </div>

        <ProjectCard />
        <ProjectCard />
        <ProjectCard />

        <div class="!my-5">
            <a
                href="#"
                class="text-sm font-semibold text-lightText hover:text-cyan-300 group"
            >
                View All My Work
                <span class="transition-all duration-200 group-hover:ml-3">
                    <i class="fa-solid fa-arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
</template>
