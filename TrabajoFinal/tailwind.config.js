/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './path/to/templates/**/*.php', // Añade la ruta a tus archivos PHP
    './public/**/*.html',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

