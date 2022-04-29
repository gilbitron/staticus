const mix = require('laravel-mix');
const command = require('node-cmd');

mix
    .setPublicPath('dist')
    .postCss('assets/main.css', 'dist/assets', [
        require('tailwindcss'),
    ])
    .browserSync({
        files: [
            'dist/**/*',
            {
                match: [
                    'config.php',
                    'content/**/*',
                    'views/**/*'
                ],
                fn: function(event, file) {
                    command.run('php staticus build', (error, stdout, stderr) => {
                        console.log(error ? stderr : stdout);
                    });
                }
            }
        ],
        callbacks: {
            ready: function(err, bs) {
                command.run('php staticus build', (error, stdout, stderr) => {
                    console.log(error ? stderr : stdout);
                });
            }
        },
        server: 'dist',
        notify: false,
        open: false,
    });
