module.exports = function(grunt) {
    grunt.initConfig({
        imagemin: { // Task
            static: { // Target
                options: { // Target options
                    optimizationLevel: 3
                },
                files: { // Dictionary of files
                    'pages/reviews/beer/images/altes.JPG': 'pages/reviews/beer/images/altes2.JPG', // 'destination': 'source'
                }
            },
        }
    });

    grunt.loadNpmTasks('grunt-contrib-imagemin');

    grunt.registerTask('default', ['imagemin']);
};
