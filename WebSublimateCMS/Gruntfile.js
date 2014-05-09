module.exports = function (grunt) {

var Globals = grunt.file.readYAML('../globals.yaml');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        jshint: {
            options: {
                maxerr: 25,
                eqeqeq: true,
                regexdash: true,
                scripturl: true,
                forin: true,
                unused: true,
                devel: true,
                undef: true,
                browser: true,
                dojo: true
            },
            webSublimateCMS: {
                src: Globals.js
            }
        },
        sass: {
            webSublimateCMS: {
                options: {
                    compass: true,
                    style: "compressed"
                },
                files: [
                    {
                        src: "src/view/main.scss",
                        dest: Globals.dist.css + "/webSublimateCMS.css"
                    }
                ]
            }
        },
        copy: {
            webSublimateCMS: {
                files: [
                    {
                        expand: true,
                        flatten: true,
                        src: Globals.images,
                        dest: Globals.dist.img
                    }
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-copy');

    // Default task(s).
    grunt.registerTask('default', ['jshint', 'sass', 'copy']);
    grunt.registerTask('validate', ['jshint']);
    grunt.registerTask('optimise', ['sass', 'copy']);
};
