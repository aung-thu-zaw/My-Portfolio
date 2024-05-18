<script setup lang="ts">
import ResumeButton from "@/Components/ResumeButton.vue";
import { Link } from "@inertiajs/vue3";
// Your Code
</script>

<template>
    <header
        class="sticky top-0 z-50 flex flex-wrap w-full py-6 text-sm md:px-16 bg-slate-900 sm:justify-start sm:flex-nowrap"
    >
        <nav
            class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between"
            aria-label="Global"
        >
            <div class="flex items-center justify-between">
                <Link
                    :href="route('home')"
                    class="flex-none text-lg font-extrabold tracking-wide font-fira text-cyan-300"
                >
                    Portfolio
                </Link>
                <div class="sm:hidden">
                    <button
                        type="button"
                        class="inline-flex items-center justify-center p-2 text-xs font-bold border rounded-lg shadow-sm text-lightText border-slate-600 bg-slate-900 hs-collapse-toggle gap-x-2 hover:bg-slate-800 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-collapse="#navbar-collapse-with-animation"
                        aria-controls="navbar-collapse-with-animation"
                        aria-label="Toggle navigation"
                    >
                        <svg
                            class="flex-shrink-0 hs-collapse-open:hidden size-4"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg
                            class="flex-shrink-0 hidden hs-collapse-open:block size-4"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                        Menu
                    </button>
                </div>
            </div>
            <div
                id="navbar-collapse-with-animation"
                class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow sm:block"
            >
                <div class="w-full">
                    <ul
                        class="flex flex-col items-start w-full pl-3 mt-5 space-y-5 text-xs font-semibold sm:space-y-0 sm:items-center sm:space-x-8 sm:flex-row sm:justify-end sm:mt-0 sm:ps-5"
                    >
                        <li
                            class="tracking-wider transition-all text-lightText hover:text-cyan-300 hover:scale-110"
                        >
                            <a href="">
                                <span class="font-fira text-cyan-300"
                                    >01.
                                </span>
                                Experience
                            </a>
                        </li>

                        <li
                            class="tracking-wider transition-all text-lightText hover:text-cyan-300 hover:scale-110"
                        >
                            <Link :href="route('projects.index')">
                                <span class="font-fira text-cyan-300"
                                    >02.
                                </span>
                                Projects
                            </Link>
                        </li>

                        <li
                            class="tracking-wider transition-all text-lightText hover:text-cyan-300 hover:scale-110"
                        >
                            <a href="">
                                <span class="font-fira text-cyan-300"
                                    >03.
                                </span>
                                Services
                            </a>
                        </li>

                        <li
                            class="tracking-wider transition-all text-lightText hover:text-cyan-300 hover:scale-110"
                        >
                            <a href="">
                                <span class="font-fira text-cyan-300"
                                    >04.
                                </span>
                                Testimonials
                            </a>
                        </li>

                        <li
                            class="tracking-wider transition-all text-lightText hover:text-cyan-300 hover:scale-110"
                        >
                            <a href="">
                                <span class="font-fira text-cyan-300"
                                    >05.
                                </span>
                                Contact
                            </a>
                        </li>

                        <li class="hidden md:block">
                            <ResumeButton />
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>
