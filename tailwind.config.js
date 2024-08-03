/** @type {import('tailwindcss').Config} */
module.exports = {
  //content: ["./src/**/*.{html,js}", "./**/*.{html,js,php}"],
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        raleway: ["Raleway"],
        montserrat: ["Montserrat"],
        "abril-fatface": ["Abril+Fatface"],
      },
      screens: {
        //xs: "0",
        sm: "576px",
        md: "768px",
        lg: "992px",
        xl: "1200px",
        xxl: "1400px",
        // sm: "640px",
        // md: "768px",
        // lg: "1024px",
        // xl: "1280px",
        // "2xl": "1536px",
      },
    },
  },
  plugins: [],
};
