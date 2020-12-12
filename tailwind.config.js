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
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms')
    ],
}
