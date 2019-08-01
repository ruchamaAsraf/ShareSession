<?php

namespace RlGroup\ShareSession;

use Config;
use Illuminate\Support\ServiceProvider;

class ShareSessionProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Config::set('database.connections.accounts', [
            'driver' => 'mysql',
            'host' => env('DB_ACCOUNT_HOST', '127.0.0.1'),
            'port' => env('DB_ACCOUNT_PORT', '3306'),
            'database' => env('DB_ACCOUNT_DATABASE', 'accounts'),
            'username' => env('DB_ACCOUNT_USERNAME', 'homestead'),
            'password' => env('DB_ACCOUNT_PASSWORD', 'secret'),
            'unix_socket' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
        ]);
         Config::set('session.driver', 'database');
         Config::set('session.connection', 'accounts');
         
    }
}
