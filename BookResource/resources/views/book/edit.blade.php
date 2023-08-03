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
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}" @if($category->id == $book->category_id) selected @endif>{{$category->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="tags">Tags</label>
    <select name="tags[]" id="tags" multiple>
        @foreach($tags as $tag)
            <option value="{{$tag->id}}" @if(in_array($tag->id, $book->tags->pluck('id')->toArray())) selected @endif>{{$tag->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Edit">
</form>