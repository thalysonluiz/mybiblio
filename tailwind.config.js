const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'mybiblio-blue-400': '#2684FF',
        'mybiblio-blue-800': '#134280',
        'mybiblio-comple-200': '#FF5340'
      },
    },
  },

  plugins: [require('@tailwindcss/forms')],
};
