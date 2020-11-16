const autoprefixer = require('autoprefixer');
const tailwindcss = require('tailwindcss');
const tailwindcss2 = require('./tailwind.config');


module.exports = {
		plugins: [
				tailwindcss,
				tailwindcss2,
				autoprefixer,

		],
};