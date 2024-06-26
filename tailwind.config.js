import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        "./node_modules/preline/preline.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter", "sans-serif"],
                fira: ["Fira Code", "monospace"],
            },
            screens: {
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
                "2xl": "1536px",
            },
            colors: {
                lightText: "#e2e8f0",
            },
        },
    },

    plugins: [forms, require("preline/plugin")],
};
