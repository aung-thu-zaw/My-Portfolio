<script setup lang="ts">
defineProps<{ no: string | number; text: string }>();
</script>

<template>
    <li
        class="flex items-center space-x-3 transition-all duration-200 cursor-pointer text-slate-500 hover:text-lightText group"
    >
        <div
            class="w-10 transition-all duration-200 border border-b-0 border-slate-500 group-hover:border-lightText group-hover:w-16"
        ></div>

        <div class="tracking-wider">
            <span
                class="transition-all duration-200 font-fira group-hover:text-cyan-300"
                >{{ no }} -
            </span>
            {{ text }}
        </div>
    </li>
</template>
