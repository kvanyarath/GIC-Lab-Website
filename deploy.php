<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'gic_website');

// Project repository
set('repository', 'git@gitlab.com:gic_website/gic_website.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts
host('52.20.182.196')
    ->user('ubuntu')
    ->identityFile('./server_key.pem')
    ->set('deploy_path', '/var/www/{{application}}');


// Tasks
set('composer_options', 'install --verbose --prefer-dist --optimize-autoloader --no-interaction');

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

// service php7.2-fpm restart
task('restart:php7.2-fpm', function () {
    run('sudo /etc/init.d/php7.2-fpm restart');
});
after('success', 'restart:php7.2-fpm');

// seed voyager bread
task('breadseeder', function () {
    run('cd {{release_path}} && {{bin/php}} artisan db:seed --class="BreadSeeder" --force');
});
after('restart:php7.2-fpm', 'breadseeder');

task('clearcache', function () {
    run('cd {{release_path}} && {{bin/php}} artisan cache:clear');
});
after('breadseeder', 'clearcache');
