module.exports = function (grunt) {
    grunt.initConfig({
        concat: {
          dist: {
            src: [
              'src/js/jquery/jquery-1.11.2.js',
              'src/js/bootstrap/bootstrap.js',
              'src/js/custom.js',
            ],
            dest:'public/resources/js/production.js',
          }
        },
        uglify: {
            build: {
                src: 'public/resources/js/production.js',
                dest: 'public/resources/js/production.min.js'
            }
        },
        less: {
          dist: {
            files: {
              'public/resources/css/styles.css': 'src/less/styles.less'
            }
          }
        },
        watch: {
          less: {
              files: ['src/less/*.less'],
              tasks: ['less'],
              options: {
                  spawn: false,
                  // livereload: true,
              }
          },
          js: {
              files: ['public/resources/js/*js'],
              options: {
                  // livereload: true,
              }
          },
          css: {
              files: ['public/resources/css/styles.css'],
              // tasks: [],
              options: {
                // livereload: true,
              }
          },
          scripts: {
            files: ['src/js/*.js'],
            tasks: ['concat', 'uglify'],
            options: {
              spawn:false,
            }
          }
        },
        browserSync: {
            dist: {
                bsFiles: {
                    src : ['public/resources/css/*.css','public/*.php','public/resources/inc/*.php','src/less/*.less']
                },
                options: {
                    proxy: '<%= php.dist.options.hostname %>:<%= php.dist.options.port %>',
                    watchTask: true,
                    notify: true,
                    open: true,
                    logLevel: 'silent',
                    ghostMode: {
                        clicks: true,
                        scroll: true,
                        links: true,
                        forms: true
                    }
                }
            }
        },

        php: {
            dist: {
                options: {
                    hostname: '127.0.0.1',
                    port: 5000,
                    base: 'public', // Project root
                    keepalive: false,
                    open: false,
                }
            }
        },


    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-php');
    grunt.loadNpmTasks('grunt-browser-sync');
    // grunt.loadNpmTasks('grunt-http-server');


    grunt.registerTask('emulate', ['php:dist', 'browserSync:dist','concat', 'uglify', 'less', 'watch']);
    grunt.registerTask('default', ['concat', 'uglify', 'less', 'watch',]);

};