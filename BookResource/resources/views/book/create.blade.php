<form action="/books" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <br>
    <label for="year">Year</label>
    <input type="text" name="year" id="year">
    <br>
    <input type="submit" value="Create">
</form>