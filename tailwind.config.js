/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#35374B',
        'secondary': '#344955',
        'accent': "#50727B",
        'accent1': '#78A083',
        'teks': {
          'primary': "#FBF9F1",
          'secondary': "#191919"
        }
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
]
}

