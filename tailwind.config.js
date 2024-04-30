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
            },
        },
    },

    plugins: [forms, require("daisyui")],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#598DB9",

                    secondary: "#1F3F5A",

                    accent: "#00ffff",

                    neutral: "#FFFFFF",

                    "base-100": "#90CBFC",

                    info: "#0000ff",

                    success: "#00ff00",

                    warning: "#00ff00",

                    error: "#ff0000",
                },
            },
        ],
    },
};
