<script setup lang="ts">
import ExperienceCard from "@/Components/ExperienceCard.vue";
</script>

<template>
    <div class="space-y-5">
        <div class="">
            <h4
                class="mb-5 text-xl font-extrabold tracking-wide text-lightText"
            >
                <span class="text-sm text-cyan-300 font-fira">02. </span>
                Experience
            </h4>

            <ExperienceCard />
            <ExperienceCard />
            <ExperienceCard />

            <div class="my-5">
                <a
                    href="#"
                    class="text-sm font-semibold text-lightText hover:text-cyan-300 group"
                >
                    View Full Experience
                    <span class="transition-all duration-200 group-hover:ml-3">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</template>
