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
        'dark-bg': '#0B0B0C',
        'electric-purple': '#6D28D9',
        'soft-gray': '#A1A1AA',
      },
      // Tambahkan boxShadow ini untuk efek glow
      boxShadow: {
        'glow-purple': '0 0 20px rgba(109, 40, 217, 0.15)',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
}