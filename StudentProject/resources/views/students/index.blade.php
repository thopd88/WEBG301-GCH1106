@extends('layouts.app')
@section('title','Student Index')
@section('main')
<div class="table-responsive">
  <table class="table table-primary">
      <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach($students as $student)
          <tr>
              <td>{{ $student->id }}</td>
              <td>{{ $student->name }}</td>
              <td>{{ $student->email }}</td>
              <td>{{ $student->phone }}</td>
              <td>{{ $student->address }}</td>
              <td>
                  <a href="/students/{{$student->id}}" class="btn btn-info">Show</a>
                  <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                  <form action="/students/{{$student->id}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection


