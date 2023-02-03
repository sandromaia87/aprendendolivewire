/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
        "./src/**/*.{html,js}"
    ],
  theme: {
    extend: {},
  },
  plugins: [],
}
