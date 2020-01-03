@extends('layouts.main')

@push('meta')
<meta property="og:url"                content="{{URL::current()}}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="{{$event->getTranslatedAttribute('name')}}" />
<!-- <meta property="og:description"        content="{{ $event->getTranslatedAttribute('detail') }}" /> -->
<meta property="og:image"              content="{{url(Storage::url($event->image))}}" />
@endpush

@section('container')
@include('frontend.partials.breadcrumb', [
    'title' => __('events.seminar'), 
    'pages' => [[
        'title' => __('events.seminar'),
        'url' => '/events'
    ]],
    'current' => $event->name
])
<!-- University Events -->
<div class="container-fluid g-pt-100">
    <div class="row d-flex justify-content-center">
        <!-- <div class="col-3">
            <img class="img-fluid" src="{{Storage::url($event->image)}}" alt="">
        </div> -->
        <div class="col-9 d-flex">
            <div class="mx-auto my-auto g-px-30">
                <h2 class="h1 text-center">
                    {{$event->getTranslatedAttribute('name')}}
                </h2>
                <div class="text-center h5 g-color-gray-dark-v3 g-pt-10">
                   Date: {{$event->start_date->format('d F Y')}} - {{$event->end_date->format('d F Y')}}
                </div>
            </div>
        </div>
    </div>
    <div class="g-py-30 row d-flex justify-content-center">
        <div class="col-md-9 text-center g-mb-30">
            <img class="img-fluid" src="{{Storage::url($event->image)}}" alt="">
        </div>
        <div class="col-md-9">
            {!! $event->getTranslatedAttribute('detail') !!}
        </div>
    </div>
</div>
<!-- End University Events -->

@endsection
