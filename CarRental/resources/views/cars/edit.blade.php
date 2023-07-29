@extends('layouts.app')
@section('title', 'Edit Car')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Edit Car</h1>
      <form action="/cars/{{ $car->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Brand</label>
          <input type="text" class="form-control" name="brand" placeholder="Enter brand" value="{{$car->brand}}">
        </div>
        <div class="form-group">
          <label>Model</label>
          <input type="text" class="form-control" name="model" placeholder="Enter model" value="{{$car->model}}">
        </div>
        <div class="form-group">
          <label>Year</label>
          <input type="text" class="form-control" name="year" placeholder="Enter year" value="{{$car->year}}">
        </div>
        <div class="form-group">
          <label>Color</label>
          <input type="text" class="form-control" name="color" placeholder="Enter color" value="{{$car->color}}">
        </div>
        <div class="form-group">
          <label>Plate</label>
          <input type="text" class="form-control" name="plate" placeholder="Enter plate" value="{{$car->plate}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
    
@endsection