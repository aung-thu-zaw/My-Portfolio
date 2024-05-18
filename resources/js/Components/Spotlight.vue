<script setup lang="ts">
import { onBeforeUnmount } from "vue";
import { onMounted } from "vue";
import { ref } from "vue";

const spotlight = ref<HTMLElement | null>(null);

const spotlightStyle = ref({
    left: "0px",
    top: "0px",
    background:
        "radial-gradient(circle, rgba(29, 37, 67, 0.4) 30%, rgba(29, 37, 67, 0.2) 90%)",
});

const moveSpotlight = (event: MouseEvent) => {
    if (spotlight.value) {
        const spotlightSize = spotlight.value.offsetWidth / 2;

        spotlightStyle.value.left = `${event.pageX - spotlightSize}px`;
        spotlightStyle.value.top = `${event.pageY - spotlightSize}px`;
    }
};

onMounted(() => window.addEventListener("mousemove", moveSpotlight));

onBeforeUnmount(() => window.removeEventListener("mousemove", moveSpotlight));
</script>

<template>
    <div
        ref="spotlight"
        class="fixed !z-50 rounded-full pointer-events-none w-[600px] h-[600px] mix-blend-screen blur-[80px]"
        :style="spotlightStyle"
    ></div>
</template>
