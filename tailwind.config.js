import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                castoro: ["Castoro", "sans-serif"],
                cherry: ["Cherry Bomb One", "sans-serif"],
                titan: ["Titan One", "sans-serif"],
                ultra: ["Ultra", "sans-serif"],
                mada: ["Mada", "sans-serif"],
            },
        },
    },

    plugins: [forms, require("daisyui")],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#598db9",

                    secondary: "#1f3f5a",

                    accent: "#131720",

                    neutral: "#ffffff",

                    "base-100": "#90cbfc",

                    info: "#3b82f6",

                    success: "#22c55e",

                    warning: "#eab308",

                    error: "#ef4444",
                },
            },
        ],
    },
};
