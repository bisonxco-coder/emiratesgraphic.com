module.exports = function (grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		uglify: {
		  my_target: {
			files: {
			  'build/script.min.js': [
					'js/jquery.js',
					'js/rellax.min.js',
					'js/scripts_int.js'
				]
			}
		  }
		},
		cssmin: {
			target: {
				files: {
					'build/styles.css': [
						'css/**/*.css',
					]
				}
			}
		},
		watch: {
			scripts: {
				files: ['css/**/*.css'],
				// files: ['js/scripts_int.js'],
				tasks: ['cssmin', 'uglify'],
				options: {
					spawn: false,
				},
			},
		},
	});

	//  Load Plugins
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	// Register tasks
	grunt.registerTask('default', ['watch', 'cssmin', 'uglify']);
	// grunt.registerTask('default', ['uglify']);
	// grunt.registerTask('concat-css', ['concat:css']);

};