@extends('layouts.app')
@section('title', 'Brands')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Brands</h1>
      <p>
        <a href="{{ route('brands.create') }}" class="btn btn-success">Add New Brand</a>
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Country</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($brands as $brand)
          <tr>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand->country }}</td>
            <td>
              <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-info">Details</a>
              <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-primary">Edit</a>
              <form style="display:inline-block" method="POST" action="{{ route('brands.destroy', $brand->id) }}">
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