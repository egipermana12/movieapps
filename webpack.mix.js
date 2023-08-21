let mix = require("laravel-mix");

mix.autoload({
	jquery: ["$", "jQuery", "window.jQuery"],
});

mix
  .js("src/js/app.js", "public/js")
  .sass("src/css/app.scss", "public/css")
  .options({
    postCss: [require("tailwindcss"), require("tailwindcss")],
  });
