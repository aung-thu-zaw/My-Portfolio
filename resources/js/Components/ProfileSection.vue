<script setup lang="ts">
import SocialLinkButton from "@/Components/SocialLinkButton.vue";
import MenuItem from "@/Components/MenuItem.vue";
</script>

<template>
    <div
        class="flex flex-col justify-between w-full max-h-screen space-y-14 md:space-y-20 md:items-start md:sticky md:top-44 md:w-1/2"
    >
        <div class="space-y-5 text-center md:text-left">
            <p class="font-semibold uppercase text-md text-lightText">
                Hi There 👋🏼 , I'm
            </p>

            <h1 class="text-6xl font-extrabold text-lightText">Aung Thu Zaw</h1>

            <p class="text-lg font-semibold text-lightText">
                Full Stack Web Developer
            </p>

            <p
                class="text-md text-slate-400 max-w-[500px] mx-auto md:mx-0 text-center md:text-left !mb-14"
            >
                I specialize in creating dynamic and responsive web applications
                using modern web technologies. With a passion for both front-end
                and back-end development, I enjoy turning ideas into fully
                functional digital experiences.
            </p>

            <div
                class="flex items-center justify-center w-full md:justify-start"
            >
                <ul
                    class="flex flex-row items-center justify-between space-x-5 text-xs font-bold uppercase md:flex-col md:space-x-0 md:space-y-5 md:items-start"
                >
                    <li class="flex items-center space-x-3 text-lightText">
                        <div
                            class="hidden w-16 border border-b-0 md:block border-lightText"
                        ></div>
                        <div class="tracking-wider">
                            <span class="font-fira text-cyan-300">01 - </span>
                            About Me
                        </div>
                    </li>
                    <MenuItem no="02" text="Experience" />
                    <MenuItem no="03" text="Projects" />
                </ul>
            </div>
        </div>

        <!-- Social Media  -->
        <div class="flex items-center justify-center w-full md:justify-start">
            <SocialLinkButton
                href="#"
                icon="fa-brands fa-facebook"
                tooltip="Connect with me on Facebook"
            />
            <SocialLinkButton
                href="#"
                icon="fa-brands fa-youtube"
                tooltip="Subscribe to my YouTube channel"
            />
            <SocialLinkButton
                href="#"
                icon="fa-brands fa-github"
                tooltip="Explore my projects on GitHub"
            />
            <SocialLinkButton
                href="#"
                icon="fa-brands fa-codepen"
                tooltip="Discover my creative projects on CodePen"
            />
            <SocialLinkButton
                href="#"
                icon="fa-solid fa-globe"
                tooltip="Visit my learning platform"
            />
            <SocialLinkButton
                href="#"
                icon="fa-solid fa-envelope"
                tooltip="Get in touch via email"
            />
        </div>
    </div>
</template>
