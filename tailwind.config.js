/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center : true,
      padding: '14px',
    },
    extend: {
      colors:{
        primary:'#1d4ed8',
      },
      letterSpacing: {
        lebar: '.5em',
      }
    },
  },
  plugins: [],
}

