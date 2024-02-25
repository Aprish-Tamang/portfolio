/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      padding: {
        DEFAULT: '2rem',
        sm: '2rem',
        md: '4rem',
        lg: '6rem',
        xl: '9rem',
        '2xl': '12rem',
      },
      
    },
    extend: {
      
    },
  },
  plugins: [],
}

