module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            dist: {
							src: [
								'js/libs/*.js', // All JS in the libs folder
								'js/ui.js'
							],
							dest: 'js/build/production.js',
						}
        },

        uglify: {
			    build: {
		        src: 'js/build/production.js',
		        dest: 'js/build/production.min.js'
			    }
				},

				watch: {
					options: {
						livereload: true,
					},
					scripts: {
						files: [',js/*.js'],
						tasks: ['concat', 'uglify'],
						options: {
							spawn: false,
						},
					},
					css: {
						files: ['sass/partials/*.scss', 'sass/partials/patterns/*.scss', 'sass/*.scss'],
						tasks: ['sass'],
						options: {
							spawn: false,
						},
					}
				},

				sass: {
					dist: {
						options: {
							style: 'compressed'
						},
						files: {
							'stylesheets/screen.css': 'sass/screen.scss'
						}
					}
				}

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify']);

};