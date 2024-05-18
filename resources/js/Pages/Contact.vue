<script setup lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import SocialLinkButton from "@/Components/SocialLinkButton.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Projects" />
    <AppLayout>
        <section class="py-10 md:py-12">
            <div class="container px-8 mx-auto space-y-14">
                <div class="space-y-5">
                    <div class="space-y-5">
                        <h1
                            class="text-4xl font-extrabold text-center text-lightText"
                        >
                            Contact Me
                        </h1>

                        <p
                            class="font-semibold text-sm text-center max-w-[900px] mx-auto text-slate-400"
                        >
                            I'd love to hear from you! Whether you have a
                            question, a project idea, or just want to say hello,
                            feel free to reach out using the contact form below
                            or through any of the other methods listed. Your
                            message is important to me, and I'll do my best to
                            get back to you as soon as possible.
                        </p>
                    </div>

                    <!-- Contact Form Example -->
                    <div>
                        <form
                            class="max-w-[600px] my-10 mx-auto border border-slate-700 p-8 rounded-md shadow shadow-slate-700"
                        >
                            <div class="mb-6">
                                <label
                                    for="name"
                                    class="block mb-1.5 text-sm font-bold text-slate-400"
                                >
                                    Full Name
                                    <span class="text-white">*</span>
                                </label>

                                <input
                                    id="name"
                                    type="text"
                                    name="name"
                                    class="w-full px-4 py-3 text-sm font-medium border rounded-md outline-none bg-slate-800 text-lightText border-slate-700 focus:border-slate-500 focus:ring-slate-500"
                                    placeholder="Enter your full name"
                                    required
                                />
                            </div>
                            <div class="mb-6">
                                <label
                                    for="email"
                                    class="block mb-1.5 text-sm font-bold text-slate-400"
                                >
                                    Email Address
                                    <span class="text-white">*</span>
                                </label>
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    class="w-full px-4 py-3 text-sm font-medium border rounded-md outline-none bg-slate-800 text-lightText border-slate-700 focus:border-slate-500 focus:ring-slate-500"
                                    placeholder="Enter your email address"
                                    required
                                />
                            </div>
                            <div class="mb-6">
                                <label
                                    for="message"
                                    class="block mb-1.5 text-sm font-bold text-slate-400"
                                >
                                    Message
                                    <span class="text-white">*</span>
                                </label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    class="w-full px-4 py-3 text-sm font-medium border rounded-md outline-none bg-slate-800 text-lightText border-slate-700 focus:border-slate-500 focus:ring-slate-500"
                                    placeholder="Write your message..."
                                    required
                                ></textarea>
                            </div>

                            <div class="w-full">
                                <button
                                    type="submit"
                                    class="block ms-auto px-5 py-2.5 text-[0.8rem] border border-slate-700 bg-slate-800 rounded-md font-semibold text-lightText hover:bg-slate-950 transition-all"
                                >
                                    <i class="fa-solid fa-paper-plane"></i>
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>

                    <p
                        class="font-semibold text-sm text-center max-w-[900px] mx-auto text-slate-400"
                    >
                        You can also connect with me on social media or send me
                        an email directly. I look forward to hearing from you!
                    </p>

                    <!-- Social Media Icons -->
                    <div class="flex justify-center space-x-4">
                        <SocialLinkButton
                            href="#"
                            icon="fa-brands fa-facebook"
                            tooltip="Connect with me on Facebook"
                        />

                        <SocialLinkButton
                            href="#"
                            icon="fa-brands fa-telegram"
                            tooltip="Connect with me on Telegram"
                        />

                        <SocialLinkButton
                            href="#"
                            icon="fa-solid fa-envelope"
                            tooltip="Get in touch via email"
                        />
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
