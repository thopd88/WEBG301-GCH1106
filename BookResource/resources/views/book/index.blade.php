<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Year</th>
        <th>Action</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>{{ $book->year }}</td>
            <td>
                <a href="/books/{{$book->id}}/edit">Edit</a>
                <form action="/books/{{ $book->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>