/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
            'Poppins' : "'Poppins', sans-serif",
        },
        colors: {
            'primary': '#111228',
            'secondary': '#252c60',
            'ylw': '#f4ff8c',
        },
        container: {
            center: true,
        }
      },
    },
    plugins: [],
  }
