/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        backgroundImage: {
            'gray-background' : 'radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%)',
        },
        colors: {
            'matrix-green' : '#03A062',
            'dark-green' : '#039058',
            'dark-gray' : '#3D3B3B'
        }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
