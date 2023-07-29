@extends('layouts.app')
@section('title', 'Details for ID ' . $car->id)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Details for ID {{ $car->id }}</h1>
      <p><a href="{{ route('cars.index') }}">Back to all cars</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{{ $car->id }}</td>
          </tr>
          <tr>
            <th>Brand</th>
            <td>{{ $car->brand }}</td>
          </tr>
          <tr>
            <th>Model</th>
            <td>{{ $car->model }}</td>
          </tr>
          <tr>
            <th>Year</th>
            <td>{{ $car->year }}</td>
          </tr>
          <tr>
            <th>Color</th>
            <td>{{ $car->color }}</td>
          </tr>
          <tr>
            <th>Plate</th>
            <td>{{ $car->plate }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection