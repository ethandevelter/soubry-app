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
                '40px': '40px',
                '45px': '45px',
            },
            colors: {
                'mainone': '#FF9D00',
                'maintwo': '#FF00D8',
                'mainhomeone': '#242424',
                'mainhometwo': '#D03630',
            },
            backgroundColor: {
                'mainone': '#FF9D00',
                'maintwo': '#FF00D8',
                'mainhomeone': '#242424',
                'mainhometwo': '#D03630',
                'ade': '#070A46',
            },
            flexBasis: {
                "1/3-gap-4": "calc(33.3% - (2/3 * 1rem))"
            },
            margin: {
                "skip": "calc((100% - 1280px) /2)",
            },
            spacing: {
                "skip": "calc((100% - 1280px) /2)",
            },
            minHeight: {
                'hero': 'calc(100% - 88px)',
                '60vh': '60vh',
            },
            zIndex: {
                '999': '999',
            },
            animation: {
                'fade-in-left': 'fadeInLeft 0.5s ease-out forwards',
                'fade-in-right': 'fadeInRight 0.5s ease-out forwards',
                'fade-in-top': 'fadeInTop 0.5s ease-out forwards',
                'fade-in-bottom': 'fadeInBottom 0.5s ease-out forwards',
              },
              keyframes: {
                fadeInLeft: {
                  '0%': { opacity: '0', transform: 'translateX(-50px)' },
                  '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                fadeInRight: {
                  '0%': { opacity: '0', transform: 'translateX(50px)' },
                  '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                fadeInTop: {
                  '0%': { opacity: '0', transform: 'translateY(-50px)' },
                  '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                fadeInBottom: {
                  '0%': { opacity: '0', transform: 'translateY(50px)' },
                  '100%': { opacity: '1', transform: 'translateY(0)' },
                },
              },
        },
    },

    plugins: [forms, typography],
};
