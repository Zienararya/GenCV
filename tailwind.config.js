/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                castoro: ["Castoro", "sans-serif"],
                cherry: ["Cherry Bomb One", "sans-serif"],
                titan: ["Titan One", "sans-serif"],
                ultra: ["Ultra", "sans-serif"],
            },
        },
    },
    plugins: [require("daisyui")],
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
