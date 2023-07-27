<!doctype html>
<html lang="en">

<head>
  <title>Edit Student {{$student->name}}</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <form action="/students/{{$student->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input disabled class="form-control" type="text" placeholder="Enter student name" name="name" id="name" value="{{$student->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input disabled class="form-control" type="text" placeholder="Enter student email" name="email" id="email" value="{{$student->email}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control" type="text" placeholder="Enter student phone" name="phone" id="phone" value="{{$student->phone}}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" placeholder="Enter student address" name="address" id="address" cols="30"
                rows="10">{{$student->address}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>