/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                transparent: "transparent",
                current: "currentColor",
                white: "#ffffff",
                "main-blue": "#164687",
                yellow: "#FFB804",
            },
        },
    },
    plugins: [],
};
