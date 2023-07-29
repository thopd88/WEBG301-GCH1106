@extends('layouts.app')
@section('title', 'Add New Brand')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Add New Brand</h1>
      <form action="{{ route('brands.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label>Country</label>
          <input type="text" class="form-control" name="country" placeholder="Enter country">
        </div>
        <div class="form-group">
          <label>Founded</label>
          <input type="text" class="form-control" name="founded" placeholder="Enter founded Year">
        </div>
        <div class="form-group">
          <label>Logo</label>
          <input type="text" class="form-control" name="logo" placeholder="Enter logo">
        </div>

        <button type="submit" class="btn btn-primary">Add New Brand</button>
      </form>
    </div>
  </div>
    
@endsection