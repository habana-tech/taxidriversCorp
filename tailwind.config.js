const colors = require('tailwindcss/colors')

module.exports = {
    purge: {
        //    // enabled: true,
        //     content: ['./assets/**/*.html',
        //         './assets/**/*.vue',
        //         './assets/**/*.jsx',
        //         './templates/**/*.html',
        //         './templates/**/*.twig']
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {

        },
        colors: {
            extend: {},
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.warmGray,
            blue: colors.lightBlue,
            red: colors.red,
            yellow: colors.amber,
            pink: colors.pink,
            green: colors.teal,
            orange: colors.orange,
            primary: colors.lightBlue,
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms')
    ],
}
