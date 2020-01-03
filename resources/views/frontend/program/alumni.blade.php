@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Alumni')])

    <div class="g-max-width-645 text-center mx-auto g-mb-40">
        <h1 class="g-font-size-40--md mb-4">{{ isset($title)?$title:'' }}</h1>
    </div>
@endsection