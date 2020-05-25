<?php

use Nwidart\Modules\Activators\FileActivator;
$subFolderMain = "src/";
return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */

    'namespace' => 'Dashboard',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */

    'stubs' => [
        'enabled' => false,
        'path' => base_path() . '/vendor/nwidart/laravel-modules/src/Commands/stubs',
        'files' => [
            'routes/web' => $subFolderMain . 'Routes/dashboard/web.php',
            'routes/api' => $subFolderMain . 'Routes/api/api.php',
            'views/index' => $subFolderMain . 'Resources/views/index.blade.php',
            'views/master' => $subFolderMain . 'Resources/views/layouts/master.blade.php',
            'scaffold/config' => $subFolderMain . 'Config/config.php',
            'composer' => 'composer.json',
            'assets/js/app' => $subFolderMain . 'Resources/assets/js/app.js',
            'assets/sass/app' => $subFolderMain . 'Resources/assets/sass/app.scss',
            'webpack' => 'webpack.mix.js',
            'package' => 'package.json',
        ],
        'replacements' => [
            'routes/web' => ['LOWER_NAME', 'STUDLY_NAME'],
            'routes/api' => ['LOWER_NAME'],
            'webpack' => ['LOWER_NAME'],
            'json' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE'],
            'views/index' => ['LOWER_NAME'],
            'views/master' => ['LOWER_NAME', 'STUDLY_NAME'],
            'scaffold/config' => ['STUDLY_NAME'],
            'composer' => [
                'LOWER_NAME',
                'STUDLY_NAME',
                'VENDOR',
                'AUTHOR_NAME',
                'AUTHOR_EMAIL',
                'MODULE_NAMESPACE',
                'PROVIDER_NAMESPACE',
            ],
        ],
        'gitkeep' => false,
    ],
    'paths' => [
        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path used for save the generated module. This path also will be added
        | automatically to list of scanned folders.
        |
        */

        'modules' => base_path('packages/dashboard'),
        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules assets path.
        |
        */

        'assets' => public_path('modules'),
        /*
        |--------------------------------------------------------------------------
        | The migrations path
        |--------------------------------------------------------------------------
        |
        | Where you run 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */

        'migration' => base_path('database/migrations'),
        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Set the generate key to false to not generate that folder
        */
        'generator' => [
            'config' => ['path' => $subFolderMain . 'Config', 'generate' => true],
            'command' => ['path' => $subFolderMain . 'Console', 'generate' => false],
            'migration' => ['path' => $subFolderMain . 'Database/Migrations', 'generate' => false],
            'seeder' => ['path' => $subFolderMain . 'Database/Seeders', 'generate' => false],
            'factory' => ['path' => $subFolderMain . 'Database/factories', 'generate' => false],
            'model' => ['path' => $subFolderMain . 'Entities', 'generate' => false],
            'routes_api' => ['path' => $subFolderMain . 'Routes/Api', 'generate' => true],
            'routes_dashboard' => ['path' => $subFolderMain . 'Routes/Dashboard', 'generate' => true],
            'controller' => ['path' => $subFolderMain . 'Http/Controllers', 'generate' => true],
            'filter' => ['path' => $subFolderMain . 'Http/Middleware', 'generate' => false],
            'request' => ['path' => $subFolderMain . 'Http/Requests', 'generate' => false],
            'provider' => ['path' => $subFolderMain . 'Providers', 'generate' => true],
            'assets' => ['path' => $subFolderMain . 'Resources/assets', 'generate' => false],
            'lang' => ['path' => $subFolderMain . 'Resources/lang', 'generate' => true],
            'views' => ['path' => $subFolderMain . 'Resources/views', 'generate' => true],
            'test' => ['path' => $subFolderMain . 'Tests/Unit', 'generate' => false],
            'test-feature' => ['path' => $subFolderMain . 'Tests/Feature', 'generate' => false],
            'repository' => ['path' => $subFolderMain . 'Repositories', 'generate' => false],
            'event' => ['path' => $subFolderMain . 'Events', 'generate' => false],
            'listener' => ['path' => $subFolderMain . 'Listeners', 'generate' => false],
            'policies' => ['path' => $subFolderMain . 'Policies', 'generate' => false],
            'rules' => ['path' => $subFolderMain . 'Rules', 'generate' => false],
            'jobs' => ['path' => $subFolderMain . 'Jobs', 'generate' => false],
            'emails' => ['path' => $subFolderMain . 'Emails', 'generate' => false],
            'notifications' => ['path' => $subFolderMain . 'Notifications', 'generate' => false],
            'resource' => ['path' => $subFolderMain . 'Transformers', 'generate' => false],
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */

    'scan' => [
        'enabled' => false,
        'paths' => [
            base_path('vendor/*/*'),
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for composer.json file, generated by this package
    |
    */

    'composer' => [
        'vendor' => 'nwidart',
        'author' => [
            'name' => 'Nicolas Widart',
            'email' => 'n.widart@gmail.com',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | Here is the config for setting up caching feature.
    |
    */
    'cache' => [
        'enabled' => false,
        'key' => 'laravel-modules',
        'lifetime' => 60,
    ],
    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */
    'register' => [
        'translations' => true,
        /**
         * load files on boot or register method
         *
         * Note: boot not compatible with asgardcms
         *
         * @example boot|register
         */
        'files' => 'register',
    ],

    /*
    |--------------------------------------------------------------------------
    | Activators
    |--------------------------------------------------------------------------
    |
    | You can define new types of activators here, file, database etc. The only
    | required parameter is 'class'.
    | The file activator will store the activation status in storage/installed_modules
    */
    'activators' => [
        'file' => [
            'class' => FileActivator::class,
            'statuses-file' => base_path('modules_statuses.json'),
            'cache-key' => 'activator.installed',
            'cache-lifetime' => 604800,
        ],
    ],

    'activator' => 'file',
];
