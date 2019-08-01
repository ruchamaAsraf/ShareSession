## ShareSession ##
**A package in Laravel that creates SESSION is shared to any apps**


### Installation ###

Install via [composer](http://getcomposer.org) in the root directory of a Laravel 5 application

    composer require rl-group/laravel-share-session

Add the following lines to `.env`

	DB_ACCOUNT_CONNECTION=accounts
 	DB_ACCOUNT_HOST=127.0.0.1
  	DB_ACCOUNT_PORT=3306
  	DB_ACCOUNT_DATABASE=
  	DB_ACCOUNT_USERNAME=
  	DB_ACCOUNT_PASSWORD=

Update DB_ACCOUNT_DATABASE,DB_ACCOUNT_USERNAME,DB_ACCOUNT_PASSWORD For the DATABASE details of the SESSION shared

Update composer

	composer update

Run the package install command

	php artisan package:install

### Usage ###

- Done `make:Auth`
- Add `use RlGroup\ShareSession\Traits\UserFromAccounts;` in `App/User.php` file
- Change row `use Notifiable`  to `use Notifiable, UserFromAccounts;` in `App/User.php` file
- Check login in website with main project login information
