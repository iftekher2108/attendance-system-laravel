import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    daisyui: {
        themes: [
          {
            mytheme: {

    "primary": "#478CCF",

    "secondary": "#116D6E",

    "accent": "#005ec6",

    "neutral": "#040815",

    "base-100": "#304463",

    "info": "#36bcff",

    "success": "#00de4a",

    "warning": "#ffa900",

    "error": "#e1465c",
              },
            },
          ],
        },

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('daisyui'),
    ],
};
