module.exports = {
  index: {
    cwd: 'src/',
    src: ['index.php'],
    dest: 'dist/',
    expand: true
  },
  humans: {
    cwd: 'src/',
    src: ['humans.txt'],
    dest: 'dist/',
    expand: true
  },
  images: {
    cwd: 'src/img',
    src: ['**'],
    dest: 'dist/img',
    expand: true
  },
  includes: {
    cwd: 'src/inc/',
    src: ['**'],
    dest: 'dist/inc/',
    expand: true
  },
  semantic_fonts: {
    cwd: 'src/css/themes/',
    src: ['**'],
    dest: 'dist/css/themes/',
    expand: true
  },
  scripts: {
    cwd: 'src/script/',
    src: ['**'],
    dest: 'dist/script/',
    expand: true
  },
  docs: {
    cwd: 'src/doc/',
    src: ['**'],
    dest: 'dist/doc/',
    expand: true
  }
}
