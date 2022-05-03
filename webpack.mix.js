const mix = require('laravel-mix');
const command = require('node-cmd');

mix
    .setPublicPath('dist')
    .copyDirectory('assets/images', 'dist/assets/images')
    .postCss('assets/main.css', 'dist/assets', [
        require('tailwindcss'),
    ])
    .version()
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
                    command.run('npm run build', (error, stdout, stderr) => {
                        console.log(error ? stderr : stdout);
                    });
                }
            }
        ],
        server: 'dist',
        notify: false,
        open: false,
    })
    .after(stats => {
        command.run('npm run build' + (mix.inProduction() ? ' production' : ''), (error, stdout, stderr) => {
            console.log(error ? stderr : stdout);
        });
    });
