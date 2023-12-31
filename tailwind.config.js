const spacingValues = {};

for (let i = 1; i <= 200; i++) {
  spacingValues[`${i}px`] = `${i}px`;
}
module.exports = {
  prefix: 'tw-',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'blue1': '#80B4FF',
        'gray1': '#454545',
        'gray2': '#2D3F59',
        'gray3': '#727272',
        'gray4': '#D6D6D6'
      },
      spacing: spacingValues,
      fontSize: spacingValues,
      borderRadius: spacingValues,
      borderWidth: spacingValues,
      letterSpacing: spacingValues,
      lineHeight: spacingValues,
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

