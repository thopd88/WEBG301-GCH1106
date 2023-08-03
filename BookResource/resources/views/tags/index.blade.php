<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($tags as $tag)
        <tr>
            <td>{{ $tag->id }}</td>
            <td>{{ $tag->name }}</td>
            <td>
                <a href="/tags/{{$tag->id}}/edit">Edit</a>
                <form action="/tags/{{ $tag->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>