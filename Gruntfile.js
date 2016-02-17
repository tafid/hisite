module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            css: {
                src: grunt.file.readJSON('themes/dataserv/css.json'),
                dest: 'web/css/all.css'
            }
        },
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'web/css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'web/css',
                    ext: '.min.css'
                }]
            }
        },
        concat_sourcemap: {
            options: {
                sourcesContent: true
            },
            all: {
                files: {
                    'web/js/all.js': grunt.file.readJSON('themes/dataserv/js.json')
                }
            }
        },
        copy: {
            main: {
                files: [
                    {
                        expand: true,
                        flatten: true,
                        src: grunt.file.readJSON('themes/dataserv/fonts.json'),
                        dest: 'web/fonts/',
                        filter: 'isFile'
                    }
                ]
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            lib: {
                files: {
                    'web/js/lib.min.js': 'web/js/lib.js'
                }
            },
            all: {
                files: {
                    'web/js/all.min.js': 'web/js/all.js'
                }
            }
        },
        //imagemin: {
        //    dynamic: {
        //        files: [{
        //            expand: true,
        //            cwd: 'web/img/',
        //            src: ['**/*.{png,jpg,gif}'],
        //            dest: 'web/img/'
        //        }]
        //    }
        //},
        watch: {
            js: {
                files: ['themes/dataserv/js/**/*.js', 'assets/js/all.json'],
                tasks: [
                    'concat_sourcemap'
                    //'uglify:lib'
                ],
                options: {
                    livereload: true
                }
            },
            fonts: {
                files: [
                    'vendor/bower/bootstrap/fonts/*'
                ],
                tasks: ['copy'],
                options: {
                    livereload: true
                }
            }
        }
    });

    // Plugin loading
    grunt.loadNpmTasks('grunt-concat-sourcemap');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    //grunt.loadNpmTasks('grunt-contrib-imagemin');

    // Task definition
    grunt.registerTask('build', ['concat', 'cssmin', 'copy', 'concat_sourcemap', 'uglify']); // 'imagemin',
    grunt.registerTask('default', ['watch']);
};