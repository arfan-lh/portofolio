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
        'primary': '#4F46E5', // Warna ungu modern
        'dark': '#0f172a',    // Warna gelap
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'], // Mengatur font agar tidak Times New Roman
      },
    },
  },
  plugins: [],
}