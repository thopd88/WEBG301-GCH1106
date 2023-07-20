## Book Resource Project

### Install
```composer install```
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

### Book Controller
```
public function index()
{
    $books = Book::all();
    return view('books.index', ['books' => $books]);
}
```
```
public function show(string $id)
{
    $book = Book::find($id);
    return view('book.show', ['book' => $book]);
}
```