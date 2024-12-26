module.exports = {
    mode: 'jit',
    purge: [
      './resources/views/**/*.blade.php',
      './resources/css/**/*.css',
    ],
    theme: {
      extend: {},
    },
    variants: {},
    plugins: [require('daisyui')],
  }