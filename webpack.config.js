var Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */


     /**DASH*/
    .addEntry('dashApp', './assets/dash/src/main.js')
    .addEntry('dashApp_login', './assets/dash/src/login.js')
    //.addEntry('dashApp', './assets/dash/scripts/index.js')
    //.addEntry('dashAppPlaceMap', './assets/dash/scripts/mapBox/adminLocationSelector.js')

    /*Taxidrivers**/
    .addEntry('taxiDriversApp', './assets/taxidrivers/js/app.js')
    .addEntry('taxiDriversAppNoCritical', './assets/taxidrivers/js/app_no_critical.js')
    .addEntry('taxiDriversIndex', './assets/taxidrivers/js/index.js')
    .addEntry('taxiDriversIndexNoCritical', './assets/taxidrivers/js/index_no_critical.js')
    .addEntry('taxiDriversPlace', './assets/taxidrivers/js/place.js')

    //Taxidrivers-tailwindcss
    .addStyleEntry('taxiDrivers', './assets/taxidrivers/css/app.scss')
    .addEntry('taxiDriversVue', './assets/taxidrivers/js/app_vue.js')


    /*Vinales**/
    .addEntry('vinalesApp', './assets/vinales/js/app.js')
    //.addEntry('page1', './assets/js/page1.js')
    //.addEntry('page2', './assets/js/page2.js')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // enables @babel/preset-env polyfills
    .configureBabel(() => {}, {
        useBuiltIns: 'usage',
        corejs: 3,
        // presets: ["@vue/cli-plugin-babel/preset"],
    })


    // enables Sass/SCSS support
    // .enableSassLoader()
    .enableSassLoader(function (options) {}, {
        resolveUrlLoader: false
    })



    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // Enable Vue loader
    //.enableVueLoader()
    // .enableVueLoader(() => {}, {
    //      useJsx: true
    // })
    .enableVueLoader(() => {}, { runtimeCompilerBuild: false })

    .enablePostCssLoader((options) => {
        options.config = {
            // directory where the postcss.config.js file is stored
            path: './postcss.config.js'
        };
    })

    .configureCssLoader((config)  => {
        if (!Encore.isProduction() && config.modules) {
            config.modules.localIdentName = "[name]_[local]_[hash:base64:5]";
        }
    })



    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()

    // uncomment if you use API Platform Admin (composer req api-admin)
    //.enableReactPreset()
    //.addEntry('admin', './assets/js/admin.js')
;
    //
    // if (!Encore.isProduction()) {
    //     Encore.disableCssExtraction();
    // }

const config = Encore.getWebpackConfig();
config.externals = {
    moment: 'moment'    //for excluding moment.js. because chart.js depends on it optionally
}
module.exports = config;

