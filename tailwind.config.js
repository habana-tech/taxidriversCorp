module.exports = {
    purge: {
       // enabled: true,
        content: ['./assets/**/*.html',
            './assets/**/*.vue',
            './assets/**/*.jsx',
            './templates/**/*.html',
            './templates/**/*.twig']
    },
    theme: {
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
        },
        fontFamily: {
            display: ['Montserrat', 'sans-serif'],
            body: ['Hind Madurai', 'sans-serif'],
        },
        extend: {},
    },
    variants: {},
    plugins: [],
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
        defaultLineHeights: true,
        standardFontWeights: true,
    },
}
