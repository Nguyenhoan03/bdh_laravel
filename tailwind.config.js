/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'dw-orange': '#FF6B35',
        'dw-gold': '#D4AF37',
      }
    },
  },
  plugins: [],
}