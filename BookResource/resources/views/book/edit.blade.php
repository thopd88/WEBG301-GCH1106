<form action="/books/{{ $book->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{$book->title}}">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{$book->description}}">
    <br>
    <label for="year">Year</label>
    <input type="text" name="year" id="year" value="{{$book->year}}">
    <br>
    <input type="submit" value="Edit">
</form>