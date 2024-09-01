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
                roboto: ["Roboto", "sans-serif"],
                lora: ["Lora", "serif"],
                merriweather: ["Merriweather", "serif"],
                opensans: ["Open Sans", "sans-serif"],
                gloock: ["Gloock", "sans-serif"],
            },
            screens: {
                xs: "320px",
            },
        },
    },
    plugins: [],
};
