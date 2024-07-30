/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        "myBg": "#31354a",
        "jobCardBorder": "#7f7fdb",

      },
      fontFamily: {
          "hanken-grotesk": ["Hanken Grotesk", "sans-serif"]
      },
      fontSize: {
          "2xs": ".625rem" // 10px
      }
    },
  },
  plugins: [],
}

