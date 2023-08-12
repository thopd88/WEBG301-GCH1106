<form action="/books" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    <br>
    <label for="year">Year</label>
    <input type="text" name="year" id="year">
    <br>
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="tags">Tags</label>
    <select name="tags[]" id="tags" multiple>
        @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Create">
</form>