const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
       extend: {
           fontFamily: {
               sans: ['Nunito', ...defaultTheme.fontFamily.sans],
           },
       },
   },
   variants: {
    extend: {},
   },
   plugins: [require('@tailwindcss/forms')],
}
