var Encore = require('@symfony/webpack-encore');

Encore
		// the project directory where compiled assets will be stored
		.setOutputPath('public/build/')
		// the public path used by the web server to access the previous directory
		.setPublicPath('/build')
		.addEntry('app', './assets/vue/index.js')
		.enablePostCssLoader()
		.cleanupOutputBeforeBuild()
		.enableBuildNotifications()
		.enableSourceMaps(!Encore.isProduction())
		.enableVersioning(Encore.isProduction())
		.enableVueLoader()
;
Encore.enablePostCssLoader(function(options) {
		options.config = {
				path: 'config/postcss.config.js'
		}
})

module.exports = Encore.getWebpackConfig();