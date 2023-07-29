@extends('layouts.app')
@section('title', 'Edit Brand')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Edit Brand</h1>
      <form action="/brands/{{ $brand->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$brand->name}}">
        </div>
        <div class="form-group">
          <label>Country</label>
          <input type="text" class="form-control" name="country" placeholder="Enter country" value="{{$brand->country}}">
        </div>
        <div class="form-group">
          <label>Founded</label>
          <input type="text" class="form-control" name="founded" placeholder="Enter founded Year" value="{{$brand->founded}}">
        </div>
        <div class="form-group">
          <label>Logo</label>
          <input type="text" class="form-control" name="logo" placeholder="Enter logo" value="{{$brand->logo}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
    
@endsection