module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      keyframes: {
        move: {
          '0%': { opacity: '1', transform: 'translate(-100px, 0)' },
          '50%': { opacity: '1', transform: 'translate(50vw, 20vh)' },
          '100%': { opacity: '0', transform: 'translate(100vw, 40vh)' },
        },
      },
      animation: {
        note: 'move 12s linear infinite',
      },
    },
  },
  plugins: [],
};
