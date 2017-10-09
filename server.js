var browserSync = require("browser-sync");
browserSync({
	proxy: 'vccw.test',
	files: [
		"./style.css",
		"./**/*.js",
		"./**/*.php",
		"./**/*.png",
		"./**/*.svg",
		"./**/*.jpg",
	]
});
