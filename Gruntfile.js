'use strict';
module.exports = function (grunt) {

  // Load grunt tasks automatically
  require('load-grunt-tasks')(grunt);

  // MODULES

  grunt.config('clean', {
    styles: [
      'public/assets/*.css', 'public/assets/*.css.map' // CSS
    ],
    js: [
      'public/assets/*.js', 'public/assets/*.js.map' // Javascript
    ],
    fonts: [
      'public/assets/dist/fonts/**/*.*', '!public/assets/dist/fonts/.gitignore' // Font Awesome + Ionicons
    ],
    third_party: [
      'public/assets/dist/bs-datepicker/**/*.*', '!public/assets/dist/bs-datepicker/.gitignore', // Bootstrap Datepicker
      'public/assets/dist/chosen-js/**/*.*', '!public/assets/dist/chosen-js/.gitignore', // Chosen JS
      'public/assets/dist/daterangepicker/**/*.*', '!public/assets/dist/daterangepicker/.gitignore', // Chosen JS
      'public/assets/dist/typeahead/**/*.*', '!public/assets/dist/typeahead/.gitignore', // Typeahead JS
    ]
  });

  grunt.config('sass', {
    dev: {
      options: {
        outputStyle: 'extended',
        sourceMap: true
      },
      files: {
        'public/assets/app.css': 'resources/assets/sass/app.scss',
        'public/assets/skins/skin-invoiceplane.min.css': 'resources/assets/sass/skin-invoiceplane.scss'
      }
    },
    build: {
      options: {
        outputStyle: 'compressed',
        sourceMap: false
      },
      files: {
        'public/assets/app.css': 'resources/assets/sass/app.scss',
        'public/assets/skins/skin-invoiceplane.min.css': 'resources/assets/sass/skin-invoiceplane.scss'
      }
    }
  });

  grunt.config('postcss', {
    dev: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')({
            browsers: 'last 3 version'
          })
        ]
      },
      src: [
        'public/assets/*.css'
      ]
    },
    build: {
      options: {
        map: false,
        processors: [
          require('autoprefixer')({
            browsers: 'last 3 version'
          })
        ]
      },
      src: [
        'public/assets/*.css'
      ]
    }
  });

  grunt.config('concat', {
    js_dependencies: {
      src: [
        'node_modules/jquery/dist/jquery.js',
        'node_modules/jquery-ui-dist/jquery-ui.js',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        'node_modules/@coreui/coreui/dist/js/coreui.js',
        'node_modules/autosize/dist/autosize.js',
        'node_modules/moment/moment.js',
        'node_modules/bootstrap-notify/bootstrap-notify.js',
        'node_modules/jquery-slimscroll/jquery.slimscroll.js'
      ],
      dest: 'public/assets/dependencies.js'
    }
  });

  grunt.config('uglify', {
    js_dependencies: {
      files: {
        'public/assets/dependencies.js': ['public/assets/dependencies.js']
      }
    }
  });

  grunt.config('copy', {
    fontawesome: {
      expand: true,
      flatten: true,
      src: ['node_modules/font-awesome/fonts/*'],
      dest: 'public/assets/dist/fonts/'
    },
    ionicons: {
      expand: true,
      flatten: true,
      src: ['node_modules/ionicons/dist/fonts/*'],
      dest: 'public/assets/dist/fonts/'
    },
    chosen_js: {
      expand: true,
      cwd: 'node_modules/chosen-js',
      src: ['chosen.css', 'chosen.jquery.js', '*.png'],
      dest: 'public/assets/dist/chosen-js/'
    },
    bs_datepicker: {
      expand: true,
      cwd: 'node_modules/bootstrap-datepicker/dist',
      src: ['locales/*.js', 'js/bootstrap-datepicker.min.js', 'css/bootstrap-datepicker3.min.css'],
      dest: 'public/assets/dist/bs-datepicker/'
    },
    daterangepicker: {
      expand: true,
      cwd: 'node_modules/daterangepicker/',
      src: ['daterangepicker.css', 'daterangepicker.js'],
      dest: 'public/assets/dist/daterangepicker/'
    },
    typeahead: {
      expand: true,
      cwd: 'node_modules/typeahead.js/dist/',
      src: ['typeahead.bundle.min.js'],
      dest: 'public/assets/dist/typeahead/'
    }
  });

  grunt.config('watch', {
    sass: {
      files: 'resources/assets/sass/**/*.scss',
      tasks: ['sass:dev', 'postcss:dev']
    }
  });

  // TASKS

  grunt.registerTask('default', 'build');

  grunt.registerTask('dev-build', [
    'clean:styles',
    'clean:js',
    'clean:fonts',
    'clean:third_party',
    'sass:dev',
    'postcss:dev',
    'concat:js_dependencies',
    'copy:fontawesome',
    'copy:ionicons',
    'copy:chosen_js',
    'copy:bs_datepicker',
    'copy:daterangepicker',
    'copy:typeahead'
  ]);

  grunt.registerTask('dev', [
    'clean:styles',
    'clean:js',
    'clean:fonts',
    'clean:third_party',
    'sass:dev',
    'postcss:dev',
    'concat:js_dependencies',
    'copy:fontawesome',
    'copy:ionicons',
    'copy:chosen_js',
    'copy:bs_datepicker',
    'copy:daterangepicker',
    'copy:typeahead',
    'watch'
  ]);

  grunt.registerTask('build', [
    'clean:styles',
    'clean:js',
    'clean:fonts',
    'clean:third_party',
    'sass:build',
    'postcss:build',
    'concat:js_dependencies',
    'uglify:js_dependencies',
    'copy:fontawesome',
    'copy:ionicons',
    'copy:chosen_js',
    'copy:bs_datepicker',
    'copy:daterangepicker',
    'copy:typeahead'
  ]);
};
