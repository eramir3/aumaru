/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        raleway: ["Raleway"],
        montserrat: ["Montserrat"],
        "abril-fatface": ["Abril+Fatface"],
      },
      screens: {
        // min values
        sm: "576px",
        md: "768px",
        lg: "992px",
        xl: "1200px",
        xxl: "2000px",
        // max values
        "max-sm": { max: "576px" },
        "max-md": { max: "768px" },
        "max-lg": { max: "992px" },
        "max-xl": { max: "1200px" },
        "max-xxl": { max: "2000px" },
      },
    },
  },
  plugins: [],
};
