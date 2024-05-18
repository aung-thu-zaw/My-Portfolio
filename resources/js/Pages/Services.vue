<script setup lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
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
                        Services
                    </h1>

                    <p
                        class="font-semibold text-sm text-center max-w-[900px] mx-auto text-slate-400"
                    >
                        Welcome to my Services page! I offer a range of
                        specialized services to help businesses thrive in the
                        digital landscape. With a focus on web development and
                        design, I provide tailored solutions to meet your unique
                        needs and objectives. Whether you're a startup looking
                        to establish an online presence or an established
                        business seeking to enhance your digital footprint, I'm
                        here to help.
                    </p>
                </div>

                <div class="max-w-[900px] mx-auto space-y-10">
                    <div>
                        <h3 class="mb-3 font-bold text-md text-lightText">
                            My services include:
                        </h3>

                        <ul
                            class="text-sm font-medium list-disc list-inside text-slate-400"
                        >
                            <li class="mb-2">Custom Website Development</li>
                            <li class="mb-2">Responsive Web Design</li>
                            <li class="mb-2">Full Stack Web Development</li>
                            <li class="mb-2">E-commerce Solutions</li>
                            <li class="mb-2">
                                Content Management Systems (CMS)
                            </li>
                            <li class="mb-2">
                                Website Maintenance and Support
                            </li>
                            <li class="mb-2">
                                Search Engine Optimization (SEO)
                            </li>
                            <li class="mb-2">Performance Optimization</li>
                        </ul>
                    </div>

                    <p
                        class="font-semibold text-sm max-w-[900px] mx-auto text-slate-400"
                    >
                        Whether you need a brand-new website, a redesign of an
                        existing site, or ongoing support and maintenance, I
                        have the expertise and dedication to bring your vision
                        to life. Let's work together to elevate your online
                        presence and achieve your business goals.
                    </p>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
