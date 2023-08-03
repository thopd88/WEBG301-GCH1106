<form action="/tags/{{ $tag->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$tag->name}}">
    <br>
    <input type="submit" value="Edit">
</form>