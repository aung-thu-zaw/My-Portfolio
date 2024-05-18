<script setup lang="ts">
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Project Details" />
    <AppLayout>
        <section class="py-10 md:py-12">
            <div class="max-w-[900px] mx-auto space-y-10 px-8">
                <div class="space-y-8">
                    <h1
                        class="text-4xl font-extrabold text-center text-lightText"
                    >
                        Advanced Blog Platform
                    </h1>

                    <p class="text-sm font-semibold text-center text-slate-400">
                        The Advanced Blog Platform is a sophisticated web
                        application designed to revolutionize the way users
                        create, manage, and publish content online. With a focus
                        on usability, performance, and scalability, this
                        platform offers a comprehensive suite of features for
                        bloggers, content creators, and publishers.
                    </p>

                    <div
                        class="p-2 overflow-hidden border rounded-md border-slate-500"
                    >
                        <img
                            src="https://wcs.smartdraw.com/working-smarter/img/how-to-create-a-project-planning-map.svg?bn=15100111933"
                            alt=""
                            class="object-contain w-full h-full rounded-md"
                        />
                    </div>
                </div>

                <div class="space-y-3.5">
                    <h3 class="text-xl font-bold text-lightText">
                        Technologies Used
                    </h3>

                    <div class="ml-4">
                        <ul
                            class="space-y-2 text-sm font-semibold list-disc text-slate-400"
                        >
                            <li>
                                Frontend: Vue.js, Vuex, Vue Router, HTML5, CSS3,
                                JavaScript
                            </li>
                            <li>Backend: Laravel, PHP, MySQL, RESTful APIs</li>
                            <li>Authentication: JWT (JSON Web Tokens)</li>
                            <li>File Storage: Amazon S3</li>
                            <li>Search: Elasticsearch</li>
                            <li>
                                Deployment: Docker, AWS (Amazon Web Services)
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-3.5">
                    <h3 class="text-xl font-bold text-lightText">Role</h3>

                    <p class="text-sm font-semibold text-slate-400">
                        As the lead developer, my responsibilities included:
                    </p>

                    <div class="ml-4">
                        <ul
                            class="space-y-2 text-sm font-semibold list-disc text-slate-400"
                        >
                            <li>
                                Architecting the system architecture and
                                database schema.
                            </li>
                            <li>
                                Implementing frontend components using React.js
                                for a responsive and intuitive user interface.
                            </li>
                            <li>
                                Developing backend APIs and routes for user
                                authentication, blog post management, and
                                comment functionality.
                            </li>
                            <li>
                                Integrating third-party APIs for social media
                                sharing and user engagement.
                            </li>
                            <li>
                                Conducting thorough testing and debugging to
                                ensure optimal performance and reliability.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-3.5">
                    <h3 class="text-xl font-bold text-lightText">
                        Challenges Faced:
                    </h3>

                    <p class="text-sm font-semibold text-slate-400">
                        One of the main challenges was implementing real-time
                        notifications for user interactions, such as new
                        comments or likes on blog posts. This required
                        integrating WebSocket technology and managing real-time
                        data updates efficiently to minimize latency and improve
                        user experience.
                    </p>
                </div>

                <div class="space-y-3.5">
                    <h3 class="text-xl font-bold text-lightText">Features</h3>
                    <div class="ml-4">
                        <ul
                            class="space-y-5 text-sm font-semibold list-decimal text-slate-400"
                        >
                            <li>
                                <p class="mb-1 text-lightText">
                                    Rich Text Editor :
                                </p>
                                <p>
                                    An intuitive and feature-rich editor for
                                    creating and formatting blog posts.
                                </p>
                            </li>
                            <li>
                                <p class="mb-1 text-lightText">
                                    User Management:
                                </p>
                                <p>
                                    User registration, login, and profile
                                    management functionalities.
                                </p>
                            </li>
                            <li>
                                <p class="mb-1 text-lightText">
                                    Content Management:
                                </p>
                                <p>
                                    Create, edit, and delete blog posts with
                                    ease. Support for categories, tags, and
                                    featured images.
                                </p>
                            </li>
                            <li>
                                <p class="mb-1 text-lightText">
                                    Comments and Interactivity:
                                </p>
                                <p>
                                    Enable user comments, likes, and social
                                    sharing for enhanced engagement.
                                </p>
                            </li>
                            <li>
                                <p class="mb-1 text-lightText">
                                    SEO Optimization:
                                </p>
                                <p>
                                    Built-in SEO tools for optimizing content
                                    visibility and search engine rankings.
                                </p>
                            </li>
                            <li>
                                <p class="mb-1 text-lightText">
                                    Analytics and Insights:
                                </p>
                                <p>
                                    Track performance metrics, user engagement,
                                    and audience demographics.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-3.5">
                    <h3 class="text-xl font-bold text-lightText">
                        Future Plans
                    </h3>

                    <p class="text-sm font-semibold text-slate-400">
                        -----
                        <!-- In the future, I plan to enhance the platform with additional features such as multimedia
                        content support, advanced search functionality, and personalized recommendations. I also aim to
                        optimize the platform's performance further and expand its user base through targeted marketing
                        campaigns and strategic partnerships. -->
                    </p>
                </div>

                <div class="space-y-3.5">
                    <h3 class="font-bold text-md text-lightText">
                        <i class="fa-brands fa-github mr-1.5"></i> Source Code
                    </h3>

                    <a href="#" class="text-sm font-semibold text-cyan-300">
                        https://www.github.com/aung-thu-zaw/example-website.git
                    </a>
                </div>
                <div class="space-y-3.5">
                    <h3 class="font-bold text-md text-lightText">
                        <i class="fa-solid fa-globe mr-1.5"></i> Live Website
                    </h3>

                    <a href="#" class="text-sm font-semibold text-cyan-300">
                        https://www.example.com
                    </a>
                </div>

                <div class="space-y-3.5">
                    <h3 class="text-xl font-bold text-lightText">
                        Contact Information
                    </h3>

                    <p class="text-sm font-semibold text-slate-400">
                        For inquiries or collaboration opportunities, feel free
                        to reach out to me via email at
                        <span class="text-cyan-300">email@example.com</span> or
                        connect with me on
                        <span class="text-cyan-300">Telegram</span> or
                        <span class="text-cyan-300">Whatsapp</span>.
                    </p>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
