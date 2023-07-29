@extends('layouts.app')
@section('title', 'Cars')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Cars</h1>
      <p>
        <a href="{{ route('cars.create') }}" class="btn btn-success">Add New Car</a>
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Year</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cars as $car)
          <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->brand->name }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->year }}</td>
            <td>
              <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info">Details</a>
              <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-primary">Edit</a>
              <form style="display:inline-block" method="POST" action="{{ route('cars.destroy', $car->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>