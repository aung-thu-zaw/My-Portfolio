<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ProjectTable from '@/Components/ProjectTable.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>

    <Head title="Projects" />
    <AppLayout>
        <section class="py-12">
            <div class="container mx-auto space-y-14">
                <div class="space-y-5">
                    <h1 class="text-4xl font-extrabold text-center text-lightText">All Projects</h1>

                    <p class="font-semibold text-sm text-center max-w-[900px] mx-auto text-slate-400">
                        Here are some of the projects I've worked on, showcasing my skills in full stack web
                        development.
                        Each
                        project highlights different aspects of my expertise, including front-end and back-end
                        development,
                        responsive design, and problem-solving.
                    </p>
                </div>

                <!-- Projects Showcase -->
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-x-auto">
                                <ProjectTable />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
