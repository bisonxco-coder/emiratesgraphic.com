module.exports = function (grunt) {
	// Configure
	grunt.initConfig({

		uglify: {
			my_target: {
				files: {
					'build/scripts.min.js': [
						// 'js/chat.js',
					],
				}
			}
		},
		cssmin: {
			target: {
				files: {
					'build/styles.css': ['css/**/*.css']
				}
			}
		},
		watch: {
			options: {
				livereload: true
			},
			scripts: {
				files: ['css/**/*.css'],
				tasks: ['express' , 'cssmin', 'uglify'],
				options: {
					spawn: false,
				},
			},
		},
		express: {
			all: {
				options: {
					port: 9000,
					hostname: 'localhost',
					bases: ['.'],
					livereload: true
				}
			}
		}
	});

	//  Load Plugins
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-express');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	// Register tasks
	grunt.registerTask('default', ['watch', 'cssmin']);
	// grunt.registerTask('server', ['express', 'watch', 'cssmin']);
	// grunt.registerTask('concat-css', ['concat:css']);




};