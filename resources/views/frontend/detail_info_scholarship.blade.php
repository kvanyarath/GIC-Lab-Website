@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Scholarships'),
    'current' => __('Detail'),
    'pages' => [[
        'url' => '/scholarships',
        'title' => __('Scholarships')
    ]]
])

    <div class="g-max-width-800  text-center mx-auto g-pt-60">
        <h2 class="g-font-size-35--md h2 mb-4">@if(\App::getLocale() == 'km'){{$title_kh}} @else {{$title_en}}@endif</h2>
    </div>
    <hr class="style-two g-width-400 g-mb-40">
    <div class="container-fluid g-pt-40 ">
        @if(\App::getLocale() == 'km'){!! $data_kh !!} @else {!!$data_en!!}@endif
    </div>
@endsection
<style>
    hr.style-two {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }
</style>

