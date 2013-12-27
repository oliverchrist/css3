module.exports = function(grunt) {
    grunt.initConfig({
        imagemin: { // Task
            static: {
                files: [{
                    expand: true,
                    cwd: 'pages/reviews/beer/images/',
                    src: '*.{png,jpg,jpeg,svg,JPG}',
                    dest: 'pages/reviews/beer/images3/'
                }]
            }
        },
        multiresize: {
            icon: {
                src: 'pages/reviews/beer/images/altes.JPG',
                dest: ['pages/reviews/beer/images/altes2.JPG', 'pages/reviews/beer/images/altes3.JPG'],
                destSizes: ['236x709', '200x700']
            }
        },
        "imagemagick-hisrc": {
            dev: {
                files: "**/*-2x.jpg",
                suffix: ["-2x", "-1x", "-low"],
            }
        },
        "imagemagick-resize": {
            dev: {
                from: 'pages/reviews/beer/images/',
                to: 'pages/reviews/beer/images/resized/',
                files: '*.JPG',
                props: {
                    width: 760
                }
            }
        },
        "imagemagick-convert": {
            dev: {
                args: ['pages/reviews/beer/images3/*.JPG', '-crop', '300x610+256+0', 'pages/reviews/beer/images4/*.JPG']
            }
        }
    });

    grunt.loadNpmTasks('grunt-imagemagick');

    grunt.registerTask('default', ['imagemagick-resize']);
    //grunt.registerTask('default', ['imagemagick-convert']);
};
