## Book Resource Project

### Install
```composer install```
```npm install```
```cp .env.example .env```
```php artisan key:generate```
```php artisan migrate```
```php artisan serve```

### Create Book resource
```php artisan create:model Book -m```
```php artisan create:controller BookController -r```

### Book Route
```
Route::resources([
    'books' => BookController::class,
]);
```