@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' =>$title])

    <div class="g-max-width-645 text-center mx-auto g-mb-40 g-mt-60">
        <h1 class="g-font-size-40--md mb-4">{{ isset($title)?$title:'' }}</h1>
    </div>
    <div class="container-fluid">
        {!!isset($data)?$data:''!!}
    </div>
@endsection
