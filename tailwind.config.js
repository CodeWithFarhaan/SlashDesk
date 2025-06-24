/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php", "*.{js,ts,jsx,tsx,mdx}"],
  theme: {
    extend: {
      colors: {
        primary: '#4f46e5',
        secondary: '#6366f1'
      }
    },
  },
  plugins: [],
}