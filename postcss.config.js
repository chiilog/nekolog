module.exports = {
	plugins: [
		require('postcss-import')({
			plugins: [
				require('stylelint')({})
			]
		}),
		require("postcss-reporter")({ clearReportedMessages: true }),
		require('postcss-nested')({}),
		require('postcss-extend')({}),
		require('postcss-mixins')({}),
		require('postcss-custom-properties')({}),
		require('postcss-color-function')({}),
		require('postcss-custom-media')({}),
		require('autoprefixer')({
			browsers: 'Android >= 4.4, iOS >= 10, ie >= 11, last 2 versions'
		}),
		require('csswring')({})
	]
}
