module.exports = function (grunt) {

    var Globals = grunt.file.readYAML('globals.yaml'),
    distDir = Globals.dist.dir.substring(3);

    grunt.initConfig({
        subgrunt: {
            release: {
                projects: {
                    'webSublimateCMS': "default",
                    'Webclient': "default",
                    'Commons': "default"
                }
            },
            optimise: {
                projects: {
                    'webSublimateCMS': "optimise",
                    'Webclient': "optimise",
                    'Commons': "optimise"
                }
            }
        },
        dojo: {
            // Webclient: {
            //     options: {
            //         dojo: Globals.resources.dojo + '/dojo/dojo.js', // Path to dojo.js file in dojo source
            //         load: 'build', // Optional: Utility to bootstrap (Default: 'build')
            //         profile: 'profiles/Webclient.profile.js', // Profile for build
            //         packages: [ // Additional places to look for package.json files
            //             "Webclient"
            //         ],
            //         cwd: './', // Directory to execute build within
            //         basePath: '',
            //         releaseDir: distDir,
            //         releaseName: "js"
            //     }
            // },
            all: {
                options: {
                    dojo: Globals.resources.dojo + '/dojo/dojo.js', // Path to dojo.js
                    load: 'build', // Optional: Utility to bootstrap (Default: 'build')
                    profile: 'profiles/all.profile.js', // Profile for build
                    packages: [ // Additional places to look for package.json files
                        "Webclient",
                        "WebSublimateCMS",
                        "Commons"
                    ],
                    cwd: './', // Directory to execute build within
                    basePath: '',
                    releaseDir: distDir,
                    releaseName: "js"
                }
            }
        },
        concat: {
            // Concatenate all CSS files into one. It must be on the hard coded order!
            webSublimateCMS: {
                src: [
                    distDir + "/css/webSublimateCMS.css",
                    distDir + "/css/commons.css"
    			],
    			dest: distDir + "/css/all-websublimate-cms.css"
    		},
    		Webclient: {
    			src: [
                    distDir + "/css/webClient.css",
                    distDir + "/css/commons.css"
				],
                dest: distDir + "/css/all-webclient.css"
    		}
        },

        clean: {
            release: {
                options: {
                    force: true
                },
                src: [
                    distDir + '/css/webSublimateCMS.css',
                    distDir + '/css/webClient.css',
                    distDir + '/css/Commons.css',
                    distDir + '/Webclient/**/*.svg',
                    distDir + '/Webclient/**/*.png',
                    distDir + '/WebSublimateCMS/**/*.svg',
                    distDir + '/WebSublimateCMS/**/*.png',
                    distDir + '/Commons/**/*.svg',
                    distDir + '/Commons/**/*.png'
                ]
            }
        },

        copy: {
            release: {
                files: [
                    {
                        src: 'index-release.html',
                        dest: distDir + '/index.html',
                    }
                ]
            }
        }
    });

    // A Grunt Task to run other Grunt Tasks
    grunt.loadNpmTasks('grunt-subgrunt');
    grunt.loadNpmTasks('grunt-dojo');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-concat');

    grunt.registerTask('default', ['subgrunt:release', 'dojo', 'concat', 'clean', 'copy']);
    grunt.registerTask('optimise', ['dojo', 'concat', 'clean', 'copy']);
  	grunt.registerTask('dev', ['subgrunt:release', 'dojo', 'concat', 'copy']);

};