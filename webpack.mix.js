const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .copy('node_modules/lineicons/web-font/fonts', 'source/assets/build/css/fonts')
    .options({
        processCssUrls: false,
    })
    .webpackConfig(webpack => {
        return {
            plugins: [
                new webpack.ProvidePlugin({
                    $: 'jquery',
                    jQuery: 'jquery',
                    'window.jQuery': 'jquery'
                })
            ]
        };
    })
    .version();
