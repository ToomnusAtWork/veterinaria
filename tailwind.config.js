const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                kanit: ["kanit", "sans-serif"],
            },
            backgroundImage: {
                'guest-pattern': "url('/public/images/company/authBG.jpg')",
                'banner': "url('/public/images/company/banner.png')",
            },colors: {
                'purp-primary': '#A89EE2',
                'purp-secondary': '#736BAA',
                'shady-purp': '#7C57D3',
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require('@tailwindcss/aspect-ratio'),
    ],
};
