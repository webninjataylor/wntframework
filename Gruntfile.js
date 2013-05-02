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
                    'css/main.css': ['css/reset.scss', 'css/wnt.scss', 'css/main.scss']
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
            dist: {
                src: ['js/jquery-1.9.0.min.js', 'js/modernizr.min.js', 'js/wnt.js', 'js/main.js'],
                dest: 'js/main.min.js'
            }
        },
        // … and minified (source and destination files)
        uglify: {
            dist: {
                src: '<%= concat.dist.dest %>',
                dest: '<%= concat.dist.dest %>'
            }
        },
        // Tasks being executed with 'grunt watch'
        watch: {
            files: [
                "*.scss"
            ],
            tasks: "sass"
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
    grunt.registerTask('default', ['sass', 'concat', 'uglify']);
    grunt.registerTask('js', ['concat', 'uglify']);

};