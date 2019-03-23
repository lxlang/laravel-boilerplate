# Laravel Boilerplate

This is a simple project for getting started on a new idea. 
Instead of setting up a laravel application, you can start 
coding what really matters, without having to worry about 
social logins, themes or packages.

Feel free to fork this. Feedback is highly appreciated. 

Includes: 
* Social Logins using `laravel/socialite`
* An AdminLTE2 Theme by `jeroennoten/laravel-adminlte`
* BootForm by `watson/bootstrap-form`

# Installation

## Basics
Run `composer install`

run `php artisan migrate`

## Socialite
Choose your Social login Provider and update your .env with your credentials. 
Only google is tested and ohter providers may take additional steps. 

## AdminLTE2 Theme
To alter your layout, edit `config/adminlte2.php`. For more 
information how to configure see [jeroennoten/Laravel-AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE)