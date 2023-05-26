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
                "gray": "#f4f4f4",
                yellow: "#FFB804",
                "main-darken": "#082D60",
                'text': '#878484'
            },
            backgroundImage: {
                'default-cover': "url('/images/cover.jpg')",
            },
        },
    },
    plugins: [],
};
