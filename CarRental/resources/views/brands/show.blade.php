@extends('layouts.app')
@section('title', 'Details for ID ' . $brand->id)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Details for ID {{ $brand->id }}</h1>
      <p><a href="{{ route('brands.index') }}">Back to all brands</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{{ $brand->id }}</td>
          </tr>
          <tr>
            <th>Name</th>
            <td>{{ $brand->name }}</td>
          </tr>
          <tr>
            <th>Country</th>
            <td>{{ $brand->country }}</td>
          </tr>
          <tr>
            <th>Founded</th>
            <td>{{ $brand->founded }}</td>
          </tr>
          <tr>
            <th>Logo</th>
            <td>{{ $brand->logo }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection