module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        "primary": {
          "light": "#C8AB83",
          "dark": "#b0874e"
        },
        "secondary": {
          "light": "#b0874e",
          "dark": "#C8AB83"
        },
        "white": "#FFFFFF",
        "dark": "#1e1f1f"
      },
      screens: {
        "3xl": "1800px"
      },
      fontFamily: {
        "header": ['"Nunito"']
      }
    },
  },
  plugins: [],
}
