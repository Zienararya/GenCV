/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            titan: ["Titan one", "sans-serif"],
            cherry: ["Cherry Bomb One", "system-ui"],
        },
        extend: {},
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: ["aqua"],
    },
};
