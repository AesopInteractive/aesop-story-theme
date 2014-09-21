'use strict';
module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // watch our project for changes
        watch: {
            less: {
				files: ['less/**/*'],
                tasks: ['less']
            },
            livereload: {
                options: { livereload: true },
                files: ['less/**/*', 'js/*.js', '**/*.html', '**/*.php', 'images/**/*.{png,jpg,jpeg,gif,webp,svg}']
            }
        },
        // style (Sass) compilation via Compass
		less: {
		  production: {
		    options: {
		      paths: ["less/source"],
		      cleancss:true
		    },
		    files: {
		      "css/style.css": "less/style.less"
		    }
		  }
		}
    });

    // register task
    grunt.registerTask('default', ['watch']);

};