module.exports = {
  theme: {
    extend: {
      colors: {
        darkBlueGrey: '#454d66',
        hoverDarkBlueGrey: '#687498',
        blueGreen: '#009975',
        treeGreen: '#58b368',
        offYellow: '#d9d872',

        mainOrange: '#f96d15',
        cream: '#f4eec7',
        limeGreen: '#ccda46',
        darkGreen: '#697c37'
      },
      fontFamily: {
        sans: [
          'Nunito Sans'
        ],
        mono: [
          'monospace',
        ],
      },
      lineHeight: {
        normal: '1.6',
        loose: '1.75',
      },
      maxWidth: {
        none: 'none',
        '7xl': '80rem',
        '8xl': '88rem'
      },
      spacing: {
        '7': '1.75rem',
        '9': '2.25rem',
        '1/2-vh': '50vh'
      },
      boxShadow: {
        'lg': '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
      }
    },
    fontSize: {
      'xs': '.8rem',
      'sm': '.925rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.75rem',
      '4xl': '2.125rem',
      '5xl': '2.625rem',
      '6xl': '10rem',
    },
  },
  variants: {
    borderRadius: ['responsive', 'focus'],
    borderWidth: ['responsive', 'active', 'focus'],
    width: ['responsive', 'focus']
  },
  plugins: [
    function({ addUtilities }) {
      const newUtilities = {
        '.transition-fast': {
          transition: 'all .2s ease-out',
        },
        '.transition': {
          transition: 'all .5s ease-out',
        },
      }
      addUtilities(newUtilities)
    }
  ]
}
