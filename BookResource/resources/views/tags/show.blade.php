{{$tag->id}}<br>
{{$tag->name}}<br>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
    </tr>
    @foreach($tag->books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->description}}</td>
        </tr>
    @endforeach
</table>