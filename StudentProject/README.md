# Requirements
- PHP 8
- Composer
- MySQL

# Steps
``` composer create-project laravel/laravel StudentProject ```

``` cd StudentProject ```

``` php artisan make:model Student -m ```

``` php artisan make:controller StudentController -r ```

``` php artisan migrate ```

``` php artisan serve ```