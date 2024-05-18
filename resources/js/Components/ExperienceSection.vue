<script setup lang="ts">
import ExperienceCard from "@/Components/ExperienceCard.vue";
import { Link } from "@inertiajs/vue3";
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
                <Link
                    :href="route('experience')"
                    class="text-sm font-semibold text-lightText hover:text-cyan-300 group"
                >
                    View Full Experience
                    <span class="transition-all duration-200 group-hover:ml-3">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </Link>
            </div>
        </div>
    </div>
</template>
