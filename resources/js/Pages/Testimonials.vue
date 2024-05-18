<script setup lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import TestimonialCard from "@/Components/TestimonialCard.vue";
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
                        Testimonials
                    </h1>

                    <p
                        class="font-semibold text-sm text-center max-w-[900px] mx-auto text-slate-400"
                    >
                        Welcome to the Testimonials page! Here, you'll find
                        feedback and testimonials from satisfied clients who
                        have experienced the value of my services firsthand.
                        Their words speak volumes about the quality of my work,
                        my dedication to client satisfaction, and the positive
                        impact I've had on their businesses. Take a look at what
                        they have to say:
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-5 max-w-[900px] mx-auto">
                    <TestimonialCard />
                    <TestimonialCard />
                    <TestimonialCard />
                    <TestimonialCard />
                </div>
            </div>
        </section>
    </AppLayout>
</template>
