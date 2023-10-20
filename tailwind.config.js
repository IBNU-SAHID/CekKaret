/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            white: "#ffffff",
            // primary Curious Blue
            primary: {
                100: "#F9F2DA",
                200: "#F4E3B7",
                300: "#DEC48B",
                400: "#BE9E65",
                500: "#936F38", //curious blue
                600: "#7E5928",
                700: "#69441C",
                800: "#553211",
                900: "#46250A",
            },
            success: {
                100: "#E7FBD6",
                200: "#CCF7AF",
                300: "#A3E783",
                400: "#7ACF5F",
                500: "#46AF31",
                600: "#2E9623",
                700: "#1A7D18",
                800: "#0F6515",
                900: "#095313",
            },
            info: {
                100: "#C8FAF9",
                200: "#93F0F6",
                300: "#5BD2E3",
                400: "#32ABC9",
                500: "#0079A5",
                600: "#005E8D",
                700: "#004676",
                800: "#00325F",
                900: "#00244F",
            },
            warning: {
                100: "#FEF7CD",
                200: "#FEED9B",
                300: "#FCDF69",
                400: "#FAD143",
                500: "#F7BB07",
                600: "#D49B05",
                700: "#B17D03",
                800: "#8F6102",
                900: "#764D01",
            },
            danger: {
                100: "#FDE4D4",
                200: "#FCC4AA",
                300: "#F69A7E",
                400: "#ED725D",
                500: "#E2372B",
                600: "#C21F22",
                700: "#A21523",
                800: "#830D23",
                900: "#6C0822",
            },

            // ...
        },
        extend: {
            backgroundImage: {
                main: "url('/img/bg/main.png')",
                "footer-texture": "url('/img/footer-texture.png')",
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}