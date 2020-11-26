module.exports = {
  purge: [],
  theme: {
    extend: {
      screens: {
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1440px',
      },
      spacing: {
        px: '1px',
        '0': '0',
        '1': '0.25rem',
        '2': '0.5rem',
        '3': '0.75rem',
        '4': '1rem',
        '5': '1.25rem',
        '6': '1.5rem',
        '7': '1.75rem',
        '8': '2rem',
        '9': '2.25rem',
        '10': '2.5rem',
        '12': '3rem',
        '14': '3.5rem',
        '15': '3.75rem',
        '16': '4rem',
        '20': '5rem',
        '24': '6rem',
        '32': '8rem',
        '40': '10rem',
        '48': '12rem',
        '56': '14rem',
        '64': '16rem',
        '75': '18.75rem',
      },
      lineHeight: {
        '15': '3.75rem',
      },
      colors: {
        gray: {
          '100': '#f9f9f9',
          '200': '#f2f2f2',
          '300': '#e5e5e5',
          '400': '#e0e0e0',
          '500': '#b8b8b8',
          '600': '#a0a0a0',
          '700': '#666666',
          '800': '#484a4f',
          '900': '#33343f',
        },
        red: {
          '100': '#ca1515',
          '200': '#da0f29',
        },
        yellow: '#ffec94',
        orange: {
          '100': '#faf9f7',
          '200': '#faf7f5',
          '300': '#de8800',
          '400': '#f07100',
          '500': '#de6800',
          '600': '#ed6800',
          '700': '#e96002',
        },
        blue: {
          '100': '#f5f6fa',
          '200': '#f2f3f7',
          '300': '#1f4068',
        },
        green: {
          '100': '#f2f7f6',
          '200': '#206a5d',
          '300': '#2b8172',
          '400': '#00993a',
        }

      },
      fontSize: {
        'xs': ['14px'],
        'base': ['16px'],
        'sm': ['18px'],
        'lg': ['20px'],
        'xl': ['24px'],
        '2xl': ['28px'],
        '3xl': ['30px'],
        '4xl': ['36px'],
      },
      borderRadius: {
        'none': '0',
        '1': '1px',
        '3': '3px',
        '5': '5px',
        '10': '10px',
        '15': '15px',
        '20': '20px',
        'full': '9999px',
      },
      container: {
        center: true,
        padding: {
          default: '1rem',
          sm: '2rem',
          lg: '4rem',
          xl: '0',
        },
      },
    }
  },
  variants: {},
  plugins: [],
};