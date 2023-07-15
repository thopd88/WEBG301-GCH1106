# Project Books
## Models
- Book
- Author
- Publisher

## Migration
- create_books_table
-- title (string), not null, 255
```$table->string('title', 255);```
-- year (integer), not null
```$table->integer('year');```
-- description (text), nullable
```$table->string('title')->nullable();```

- create_authors_table
-- name (string), not null, 255
-- email (string), not null, 255
-- address (string), not null, 255

- create_publishers_table
-- name (string), not null, 255
-- address (string), not null, 255

## Controllers
- BookController

## Views
- index.blade.php
- create.blade.php
- edit.blade.php
- show.blade.php

## Routes
- web.php
```route::resource('books', BookController::class);```

## Database
