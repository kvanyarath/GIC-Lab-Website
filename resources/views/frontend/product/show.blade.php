@extends('layouts.main')

@section('container')

@include('frontend.partials.title', ['title' => $product->title])

<div class="container-fluid g-mt-50">
    {!! $product->detail !!}
</div>

@endsection
