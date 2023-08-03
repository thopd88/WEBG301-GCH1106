{{$category->id}}<br>
{{$category->name}}<br>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
    </tr>
    @foreach($category->books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->description}}</td>
        </tr>
    @endforeach
</table>