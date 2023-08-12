### Add Image to Book model
## Migration
```
php artisan make:migration add_image_to_books_table
```
```
Schema::table('books', function (Blueprint $table) {
            $table->string('image')->nullable()->after('description');
        });
```
```
php artisan migrate
```
## BookController
```
if ($request->hasFile('image')) {
    $book->image = $request->file('image')->store('public/images');
    $book->image = env('APP_URL').str_replace('public/', '/upload/', $book->image);
}
```
## Books View
```
<form action="/books" method="post" enctype="multipart/form-data">
<input type="file" name="image" id="image">
```
## config/filesystems.php
```
'links' => [
    public_path('upload') => storage_path('app/public'),
],
```
## Create symlink
```
php artisan storage:link
```


### CRUD Book
## Delete
# BookController
```
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }
```
# Delete Book View (index.blade.php)
```
    <form action="/books/{{ $book->id }}" method="post" style="display: inline">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
    </form>
```

## Edit
# BookController
```
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('book.edit', ['book' => $book]);
    }

    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->description = $request->description;
        $book->year = $request->year;
        $book->save();
        return redirect('/books');
    }
```
# Edit Book View
```
    action="/books/{{ $book->id }}"
    @csrf
    @method('PUT')
```

## Create 
# BookController
```
    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->year = $request->year;
        $book->save();
        return redirect('/books');
    }
```
# Create Book View
```
    @csrf
```



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