module.exports = {
  static: {
    options: {
      pngquant: true,
      optipng: false,
      zopflipng: true,
      advpng: true,
      jpegRecompress: false,
      jpegoptim: true,
      mozjpeg: true,
      gifsicle: true,
      svgo: true
    }
  },
  dynamic: {
    files: [{
      expand: true,
      cwd: 'src/assets/img/',
      src: ['*.{png,jpg,gif,svg}'],
      dest: 'src/assets/img/compressed'
    }]
  }
}
