<script setup lang="ts">
// Your Code
</script>

<template>
    <button
        class="relative flex items-center justify-start w-10 h-10 overflow-hidden transition-all duration-200 border rounded-full shadow-lg cursor-pointer bg-slate-800 hover:bg-cyan-600 hover:border-cyan-500 text-lightText border-slate-600 group hover:w-28 hover:rounded-lg active:translate-x-1 active:translate-y-1 md:animate-none animate-bounce hover:animate-none"
    >
        <div
            class="flex items-center justify-center w-full text-white transition-all duration-300 group-hover:justify-start group-hover:px-3 text-md"
        >
            <i class="fa-solid fa-download"></i>
        </div>
        <div
            class="absolute text-xs font-bold text-white uppercase transition-all duration-300 transform translate-x-full opacity-0 right-5 group-hover:translate-x-0 group-hover:opacity-100"
        >
            Resume
        </div>
    </button>
</template>
