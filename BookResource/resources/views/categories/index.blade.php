<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="/categories/{{$category->id}}/edit">Edit</a>
                <form action="/categories/{{ $category->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>