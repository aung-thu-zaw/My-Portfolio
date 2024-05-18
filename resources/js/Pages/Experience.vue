<script setup lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import ExperienceCard from "@/Components/ExperienceCard.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Projects" />
    <AppLayout>
        <section class="py-10 md:py-12">
            <div class="container px-8 mx-auto space-y-14">
                <div class="space-y-5">
                    <h1
                        class="text-4xl font-extrabold text-center text-lightText"
                    >
                        Experience
                    </h1>

                    <p
                        class="font-semibold text-sm text-center max-w-[900px] mx-auto text-slate-400"
                    >
                        While I may not have professional experiences in
                        traditional workplaces, my journey as a self-taught
                        developer is a testament to my passion for learning and
                        growth. Through self-study and personal projects, I have
                        immersed myself in various technologies and
                        methodologies, gaining hands-on experience in full stack
                        web development. The projects showcased here represent
                        milestones in my learning journey, highlighting my
                        dedication to mastering front-end and back-end
                        development, responsive design, and problem-solving
                        skills.
                    </p>
                </div>

                <div class="max-w-[900px] mx-auto">
                    <ExperienceCard />
                    <ExperienceCard />
                    <ExperienceCard />
                    <ExperienceCard />
                    <ExperienceCard />
                    <ExperienceCard />
                </div>
            </div>
        </section>
    </AppLayout>
</template>
