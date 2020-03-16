@extends('layout')

@section('title', 'Product details')

@section('content')
<h1>{{ $product->name }}</h1>
<p><strong>Price:</strong> {{ $product->price }}</p>
<p>{{ $product->description }}</p>
<p><a href="{{ action('ProductController@list') }}">Go back</a></p>
@endsection
