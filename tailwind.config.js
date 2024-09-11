/** @type {import('tailwindcss').Config} */

module.exports = {
  purge: ['./src/views/**/*.php'],
  content: [
    "./src/**/*.{html,js,php}",
  ],
  darkMode: 'class', // o 'media' o 'class'
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Montserrat', 'sans-serif'],
        'material-ico' : "Material Symbols Outlined"
      },
      fontWeight: {
        'normal': '100',
        'medium': '500',
        'wide': '600',
      },
      fontSize: {
        'title': '2.5em',
        'subtitle': '1.5em',
        'subtitle_2': '1.25em',
        'paragraph': '1em',
        'low': '.9375em',
      },
      boxShadow: {
        'low': 'var(--shadow-elevation-low)',
        'medium': 'var(--shadow-elevation-medium)',
        'high': 'var(--shadow-elevation-high)',
      },
      colors: {
        // 'primary': 'var(--color-primary)',
        'primary': '#d5ffff',
        'secondary': 'var(--color-secondary)',

        'tertiary': {
        '100':'#005954',
        '200':'#338b85',
        '300':'#5dc1b9',
        '400':'#358b35'
        },

        'text-primary': 'var(--color-text-primary)',
        'text-secondary': 'var(--color-text-secondary)',
        'text-tertiary': 'var(--color-text-tertiary)',

        'success': {
          '200': 'var(--color-success)',
          '100': 'var(--color-success-light)'
        },
        'warning': {
          '200': 'var(--color-warning)',
          '100': 'var(--color-warning-light)'
        },
        'error': {
          '200': 'var(--color-error)',
          '100': 'var(--color-error-light)'
        },

        'disabled': 'var(--color-disabled)',
        'opaco': 'var(--opaco)',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
