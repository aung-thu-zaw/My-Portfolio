<script setup lang="ts">
defineProps<{ href: string; tooltip: string; icon: string }>();
</script>

<template>
    <div class="relative inline-block group">
        <a
            :href="href"
            class="flex items-center justify-center w-10 h-10 text-lg transition-all border rounded-md text-slate-500 hover:text-slate-400 hover:bg-slate-800 border-slate-900 hover:border-slate-600 hover:text-xl"
        >
            <i :class="icon"></i>
        </a>
        <div
            v-if="tooltip"
            class="bg-slate-800 absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded-[5px] py-1.5 px-3.5 text-sm font-medium text-white opacity-0 group-hover:opacity-100"
        >
            <span
                class="bg-slate-800 absolute bottom-[-3px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45"
            ></span>
            {{ tooltip }}
        </div>
    </div>
</template>
