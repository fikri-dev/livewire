module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      keyframes: {
          pop: {
           '0%': { 
             transform: 'scaleY(0)',
             opacity: '0'
            },
            '100%': { 
              transform: 'scaleY(1)',
              opacity: '1' 
            },
         }
      },
      animation: {
         pop: 'pop 0.3s ease-out 1',
      },
    },
  },
  variants: {
    backgroundColor: ({ after }) => after(['disabled'])
  },
  plugins: [],
}
