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
        'mybiblio-blue-500': '#1A65D8',
        'mybiblio-blue-600': '#0078BC',
        'mybiblio-blue-700': '#134280',
        'mybiblio-blue-800': '#00273D',
        'mybiblio-comple-200': '#FF5340'
      },
    },
  },

  plugins: [require('@tailwindcss/forms')],
};
