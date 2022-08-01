/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        gridTemplateColumns:{
          'custom': '1fr 2fr'
        },
        height:{
          'custom': '50vh',
          '100': '30rem'
        }
      },
    },
    darkMode: 'media',
    plugins: [],
  }