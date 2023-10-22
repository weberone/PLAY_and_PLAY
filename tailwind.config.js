/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    fontSize: {
      'base': ['0.9rem', {
        lineHeight: '1.4rem',
        fontWeight: '500',
      }],
    },
    extend: {
      colors: {
        play: '#00F680',
        watch:'#00D1FF',
        collect:'#FFD700',
        giallo:'#FFD700',
        bianco02:'rgba(245, 245, 245, 0.26)',
        bianco05:'rgba(245, 245, 245, 0.3)',
        navi: {
          50: '#',
          100: '#',
          200: '#',
          300: '#4D4B62',
          400: '#',
          500: '#343248',
          600: '#',
          700: '#242235',
          800: '#',
          900: '#171527',
        },
      }
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '2rem',
        sm: '2rem',
        lg: '2rem',
        xl: '2rem',
        '2xl': '2rem',
      },
    },
  },
  plugins: [],
}