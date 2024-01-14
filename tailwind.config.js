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
        'orange1': '#FFC12B',
        'blue1': '#80B4FF',

        'blue2': '#405A80',
        'blue3': '#ECF4FF',
        'gray1': '#454545',
        'gray2': '#2D3F59',
        'gray3': '#727272',
        'gray4': '#D6D6D6',
        'gray5': "#B7B7B7",
        'gray6': "#898989",
        'green1': "#06C270"
      },
      spacing: spacingValues,
      fontSize: spacingValues,
      lineHeight: spacingValues,
      borderRadius: spacingValues,
      borderWidth: spacingValues,
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

