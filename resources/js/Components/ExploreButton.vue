<script setup>
// Your Code
</script>

<template>
    <button
        class="relative z-10 w-32 h-10 overflow-hidden text-xs font-bold text-white border rounded-md cursor-pointer bg-slate-900 border-slate-600 group ">
        <i class="mr-1.5 fa-solid fa-eye"></i>
        See Detail
        <span
            class="absolute h-24 transition-transform duration-1000 origin-left transform scale-x-0 bg-slate-300 w-36 -top-8 -left-2 rotate-12 group-hover:scale-x-100 group-hover:duration-500"></span>
        <span
            class="absolute h-24 transition-transform duration-700 origin-left transform scale-x-0 bg-slate-500 w-36 -top-8 -left-2 rotate-12 group-hover:scale-x-100 group-hover:duration-700"></span>
        <span
            class="absolute h-24 transition-transform duration-500 origin-left transform scale-x-0 bg-slate-800 w-36 -top-8 -left-2 rotate-12 group-hover:scale-x-100 group-hover:duration-1000"></span>
        <span
            class="absolute z-10 duration-100 opacity-0 group-hover:opacity-100 group-hover:duration-1000 top-3 left-7">
            <i class="mr-1.5 fa-solid fa-info-circle"></i>
            Explore!
        </span>
    </button>
</template>
