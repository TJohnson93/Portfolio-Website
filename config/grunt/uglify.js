module.exports = {
  development: {
    files: {
      'src/js/app-min.js': [
        'src/components/jquery/dist/jquery.js',
        'src/components/semantic/dist/semantic.js',
        'src/components/animatescroll/animatescroll.js',
        'src/js/app.js'
      ]
    }
  },
  production: {
    files: {
      'dist/js/app-min.js': 'src/js/app-min.js'
    }
  }
}
