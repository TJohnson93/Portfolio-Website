module.exports = {
  development: {
    options: {
      paths: ['src/css']
    },
    files: {
      'src/css/app-min.css' : [
        'src/components/semantic/dist/semantic.css',
        'src/css/sprites.css',
        'src/css/portfolio_sprites.css',
        'src/css/app.less'
      ]
    }
  },
  production: {
    options: {
      compress: true,
      paths: ['src/css']
    },
    files: {
      'dist/css/app-min.css' : 'src/css/app-min.css'
    }
  }
}
