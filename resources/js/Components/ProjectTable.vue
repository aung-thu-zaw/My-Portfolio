<script setup lang="ts">
import ExploreButton from "@/Components/ExploreButton.vue";
</script>

<template>
    <table class="min-w-full divide-y divide-slate-700">
        <thead>
            <tr>
                <th
                    scope="col"
                    class="px-3 py-4 text-sm font-bold text-start text-lightText"
                >
                    <i class="mr-1.5 fa-solid fa-calendar"></i>
                    Year
                </th>
                <th
                    scope="col"
                    class="px-3 py-4 text-sm font-bold text-start text-lightText"
                >
                    <i class="mr-1.5 fa-solid fa-clipboard-list"></i>
                    Project
                </th>
                <th
                    scope="col"
                    class="px-3 py-4 text-sm font-bold text-start text-lightText"
                >
                    <i class="mr-1.5 fa-solid fa-clipboard"></i>
                    Type
                </th>
                <th
                    scope="col"
                    class="px-3 py-4 text-sm font-bold text-start text-lightText"
                >
                    <i class="mr-1.5 fa-solid fa-code"></i>
                    Built with
                </th>
                <th
                    scope="col"
                    class="px-3 py-4 text-sm font-bold text-start text-lightText"
                >
                    <i class="mr-1.5 fa-solid fa-link"></i>
                    Link
                </th>

                <th
                    scope="col"
                    class="px-3 py-4 text-sm font-bold text-start text-lightText"
                ></th>
            </tr>
        </thead>

        <tbody class="divide-y divide-slate-700">
            <tr v-for="index in 10" :key="index">
                <td
                    class="px-3 py-4 text-sm font-semibold text-start text-slate-400 whitespace-nowrap"
                >
                    2012
                </td>

                <td
                    class="px-3 py-4 text-sm font-bold text-start text-lightText whitespace-nowrap"
                >
                    Advanced Blog Platform
                </td>

                <td
                    class="px-3 py-4 text-sm font-semibold text-start text-slate-400 whitespace-nowrap"
                >
                    <div
                        href="#"
                        class="text-xs inline-block font-semibold text-green-300 bg-green-600 bg-opacity-50 px-3.5 py-1 rounded-full border border-green-700"
                    >
                        <i class="fa-solid fa-briefcase mr-1.5"></i>
                        Client Project
                    </div>
                    <!-- <div href="#"
                        class="text-xs inline-block font-semibold text-blue-300 bg-blue-600 bg-opacity-50 px-3.5 py-1 rounded-full border border-blue-700">
                        <i class="fa-solid fa-building mr-1.5"></i>
                        Company Project
                    </div>
                    <div href="#"
                        class="text-xs inline-block font-semibold text-purple-300 bg-purple-600 bg-opacity-50 px-3.5 py-1 rounded-full border border-purple-700">
                        <i class="fa-solid fa-code-branch mr-1.5"></i>
                        Open Source Project
                    </div>
                    <div href="#"
                        class="text-xs inline-block font-semibold text-red-300 bg-red-600 bg-opacity-50 px-3.5 py-1 rounded-full border border-red-700">
                        <i class="fa-solid fa-graduation-cap mr-1.5"></i>
                        Academic Project
                    </div>
                    <div href="#"
                        class="text-xs inline-block font-semibold text-gray-300 bg-gray-600 bg-opacity-50 px-3.5 py-1 rounded-full border border-gray-700">
                        <i class="fa-solid fa-flask mr-1.5"></i>
                        Test Project
                    </div> -->
                </td>

                <td class="px-3 py-4 text-start whitespace-nowrap">
                    <div
                        class="flex items-center space-x-3 overflow-x-scroll max-w-[400px]"
                    >
                        <a
                            href="#"
                            class="text-xs font-semibold text-cyan-300 bg-cyan-600 bg-opacity-50 px-3.5 py-1 rounded-full border border-cyan-700"
                        >
                            Inertia Js
                        </a>
                        <a
                            href="#"
                            class="text-xs font-semibold text-cyan-300 bg-cyan-600 bg-opacity-50 px-3.5 py-1 rounded-full border border-cyan-700"
                        >
                            Vue Js
                        </a>

                        <a
                            href="#"
                            class="text-xs font-semibold text-cyan-300 bg-cyan-600 bg-opacity-50 px-3.5 py-1 rounded-full border border-cyan-700"
                        >
                            Laravel
                        </a>
                        <a
                            href="#"
                            class="text-xs font-semibold text-cyan-300 bg-cyan-600 bg-opacity-50 px-3.5 py-1 rounded-full border border-cyan-700"
                        >
                            MySql
                        </a>
                    </div>
                </td>

                <td
                    class="px-3 py-4 text-sm font-semibold text-start text-slate-400 whitespace-nowrap"
                >
                    <a href="#" class="transition-all hover:text-cyan-300">
                        www.example.com
                        <i class="fa-solid fa-arrow-trend-up"></i>
                    </a>
                </td>

                <td
                    class="px-3 py-4 text-xs font-bold text-start whitespace-nowrap"
                >
                    <ExploreButton />
                </td>
            </tr>
        </tbody>
    </table>
</template>
