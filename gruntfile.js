// Gruntfile.js
module.exports = function (grunt) {

  // measures the time each task takes
  require('time-grunt')(grunt);

  // load tasks
  require('load-grunt-tasks')(grunt);

  // define grunt options
  var options = {
    config : {
      src : "config/grunt/*.js"
    }
  };

  // loads the various task configuration files
  var configs = require('load-grunt-configs')(grunt, options);
  grunt.initConfig(configs);

  // Register tasks
  grunt.registerTask('default', [
    'uglify:development',
    'less:development'
  ]);

  grunt.registerTask('build', [
    //'default', // Run Development Build
    'newer:uglify:production',
    'newer:less:production',
    // 'newer:copy',
  ]);

  grunt.registerTask('serve', [
    'php:dist',         // Start PHP Server
    'watch'             // Any other watch tasks you want to run
  ]);
}
