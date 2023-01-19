const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                black: colors.black,
                while: colors.white,
                gray: colors.neutral,
                'gray-background': '#f7f8fc',
                'blue': '#328af1',
                'blue-hover': '#2879bd',
                'yellow': '#ffc73c',
                'red': '#ec454f',
                'green': '#1aab8b',
                'purple': '#8b60ed'
            },
            maxWidth: {
                custom: '62.5rem'
            },
            spacing: {
                70: '17.5rem',
                175: '43.75rem'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
