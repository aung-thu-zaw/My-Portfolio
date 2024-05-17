<script setup>
import { Link } from '@inertiajs/vue3';

// Your Code
</script>

<template>
    <nav class="sticky top-0 z-50 flex items-center justify-between px-16 py-6 bg-slate-900">
        <Link :href="route('home')" class="text-lg font-extrabold tracking-wide font-fira text-cyan-300">
        Portfolio
        </Link>

        <div class="">
            <ul class="flex items-center space-x-8 text-xs font-semibold">
                <li class="tracking-wider transition-all text-lightText hover:text-cyan-300 hover:scale-110">
                    <a href="">

                        <span class="font-fira text-cyan-300">01. </span> Experience
                    </a>
                </li>

                <li class="tracking-wider transition-all text-lightText hover:text-cyan-300 hover:scale-110">
                    <Link :href="route('projects')">
                    <span class="font-fira text-cyan-300">02. </span> Projects
                    </Link>
                </li>

                <li class="tracking-wider transition-all text-lightText hover:text-cyan-300 hover:scale-110">
                    <a href="">

                        <span class="font-fira text-cyan-300">03. </span> Services
                    </a>
                </li>

                <li class="tracking-wider transition-all text-lightText hover:text-cyan-300 hover:scale-110">
                    <a href="">

                        <span class="font-fira text-cyan-300">04. </span> Testimonials
                    </a>
                </li>

                <li class="tracking-wider transition-all text-lightText hover:text-cyan-300 hover:scale-110">
                    <a href="">

                        <span class="font-fira text-cyan-300">05. </span> Contact
                    </a>
                </li>

                <li>
                    <button
                        class="relative flex items-center justify-start w-10 h-10 overflow-hidden transition-all duration-200 border rounded-full shadow-lg cursor-pointer bg-slate-800 hover:bg-cyan-600 hover:border-cyan-500 text-lightText border-slate-600 group hover:w-28 hover:rounded-lg active:translate-x-1 active:translate-y-1">
                        <div
                            class="flex items-center justify-center w-full text-white transition-all duration-300 group-hover:justify-start group-hover:px-3 text-md">
                            <i class="fa-solid fa-download"></i>
                        </div>
                        <div
                            class="absolute text-xs font-bold text-white uppercase transition-all duration-300 transform translate-x-full opacity-0 right-5 group-hover:translate-x-0 group-hover:opacity-100">
                            Resume
                        </div>
                    </button>

                </li>
            </ul>
        </div>
    </nav>
</template>
