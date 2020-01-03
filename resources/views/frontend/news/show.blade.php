@extends('layouts.main')

@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('news'),
    'current' => $news->title,
    'pages' => [[
        'url' => '/news',
        'title' => __('news')
    ]]
])

<!-- @include('frontend.partials.title', ['title' => __('news')]) -->

<div class="container-fluid g-mt-50">
    <div class="row">
        <div class="col-md-9">
            <div class="g-mb-30">
                <h2 class="h1" style="font-weight: bold">{{$news->title}}    </h2>
            </div>
            <div class="g-mb-10 g-font-size-12 g-color-gray-dark-v4">
                <i class="fa fa-calendar g-mr-5"></i> {{$news->posted_date? $news->posted_date->format('d-m-Y') : ''}}
            </div>
            <div style="text-align: justify;">
                {!! $news->description !!}
            </div>
        </div>
        <div class="col-md-3 g-pl-20">
            @include('frontend.news.partials.recent-post')
        </div>
    </div>
</div>

@endsection
