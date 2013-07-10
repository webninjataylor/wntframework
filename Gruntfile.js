module.exports = function(grunt) {

    // Initializes the Grunt tasks with the following settings
    grunt.initConfig({
        // A list of SASS files to process, concatenate, and minify
        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'css/main.min.css': ['css/reset.scss', 'css/bootstrap.min.css', 'css/bootstrap-responsive.min.css', 'css/main.scss']
                }
            }
        },
        // A list of files, which will be syntax-checked by JSHint
        // NOTE: Don't check uglified files
        jshint: {
            files: ['Gruntfile.js', 'js/main.js']
        },
        // JS files to be concatenated … (source and destination files)
        concat: {
            libs: {
                src: ['js/jquery-1.9.0.min.js', 'js/modernizr.min.js', 'js/underscore.min.js', 'js/bootstrap.min.js'],
                dest: 'js/libs.min.js'
            },
            app: {
                src: ['js/wnt.js', 'js/main.js'],
                dest: 'js/app.min.js'
            }
        },
        // … and minified (source and destination files)
        uglify: {
            libs: {
                src: '<%= concat.libs.dest %>',
                dest: '<%= concat.libs.dest %>'
            },
            app: {
                src: '<%= concat.app.dest %>',
                dest: '<%= concat.app.dest %>'
            }
        },
        // Tasks being executed with 'grunt watch'
        watch: {
            files: [
                "css/main.scss", "js/wnt.js", "js/main.js"
            ],
            tasks: "default"
        }
    });

    // Load the plugins that provide the tasks we specified in package.json.
    //grunt.loadNpmTasks('zlib-browserify');  BREAKS
    //grunt.loadNpmTasks('grunt-lib-contrib');  BREAKS
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // TASKS
    grunt.registerTask('default', ['sass', 'concat:app', 'uglify:app']);
    grunt.registerTask('full', ['sass', 'concat', 'uglify']);
    grunt.registerTask('js', ['concat', 'uglify']);

};