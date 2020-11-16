var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
		.enablePostCssLoader()
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVueLoader()
;
Encore.enablePostCssLoader(function(options) {
		options.config = {
				path: 'config/postcss.config.js'
		}
})

module.exports = Encore.getWebpackConfig();