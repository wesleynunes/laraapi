const mix = require('laravel-mix');
// const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');


// mix.browserSync({
//    proxy: 'http://laraapi.dev.com',
//    host: 'http://laraapi.dev.com',
//    open: false,
// });


   // .browserSync({
   //    proxy: 'laraapi.dev.com',
   //    host: 'laraapi.dev.com',
   //    open: false,
   //    open: 'external',
   // }); 
 
   

// mix.browserSync('laraapi.dev.com');
// mix.browserSync('192.168.33.90');
// mix.browserSync('open: false');

// mix.browserSync({
//    proxy: 'http://laraapi.dev.com',
//    host: '192.168.33.90',
//    open: false,
// });




// if (!mix.config.production) {
//    mix.browserSync({
//       // Vagrant box's hostname
//       proxy: 'http://laraapi.dev.com',
//       // list of compiled files in public or templates
//       files: [
//          'public/assets/**/*',
//          'public/index.php',
//       ],
//       // The Vagrant box's private ip
//       host: '192.168.33.90',
//       port: 3000,
//       open: false,
//       // https: {
//       //    // allow Browsersync to access key: sudo chmod o+x /etc/ssl/private
//       //    key: '/etc/ssl/private/laraapi.dev.com.dev.key',
//       //    cert: '/etc/ssl/certs/laraapi.dev.com.dev.crt',
//       // },
//       watchOptions: {
//          usePolling: true,
//          interval: 500,
//       },
//    });
//    }






// mix.webpackConfig({
//    plugins: [
//       new BrowserSyncPlugin(
//          {
//             host: '192.168.33.90',
//             // port: 3000,
//             proxy: 'http://laraapi.dev.com',
//             files: [
//                './js/',
//                './lang/',
//                './sass/',
//                './resources/views/**/*',
//                './routes/**/*'
//             ],
//             watchOptions: {
//               usePolling: true,
//               interval: 500
//             },
//             open: false
//          },
//          {
//             reload: false
//          }
//       )
//    ]
// })



// if (!mix.config.production) {
//    mix.browserSync({
//      // Vagrant box's hostname
//      proxy: 'http://laraapi.dev.com',
//      // list of compiled files in public or templates
//      files: [
//        'public/css/**/*',
//        'public/js/**/*',
//      ],
//      // The Vagrant box's private ip
//      host: '192.168.33.90',
//      port: 3004,
//      open: false,
//    //   https: {
//    //     // allow Browsersync to access key: sudo chmod o+x /etc/ssl/private
//    //     key: '/etc/ssl/private/ssl-cert-snakeoil.key',
//    //     cert: '/etc/ssl/certs/fm-example-site.dev.crt',
//    //   },
//      watchOptions: {
//        usePolling: true,
//        interval: 500,
//      },
//    });
//  }