@extends('layout')

@section('title', 'Product list')

@section('content')
<h1>Products</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td><a href="{{ action('ProductController@details', $product->id) }}">{{ $product->name }}</a></td>
      <td>{{ $product->price }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
