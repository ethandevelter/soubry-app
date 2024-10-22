import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                dmsans: ['DM Sans', ...defaultTheme.fontFamily.sans],
                sofia: ['sofia-pro', ...defaultTheme.fontFamily.sans],
                atyp: ['atyp-bl-variable', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                '12px': '12px',
            },
            borderRadius: {
                '45px': '45px',
            },
        },
    },

    plugins: [forms, typography],
};
