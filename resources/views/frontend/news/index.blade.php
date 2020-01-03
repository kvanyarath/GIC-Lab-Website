@extends('layouts.main')

@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('news')])

@include('frontend.partials.title', ['title' => __('news')])

<div class="container-fluid g-py-30">

    <div class="">
        @foreach($data as $index => $news)
        @if($index % 2 == 0)
        <!-- Response to Recent Postering Incidents -->
        <div class="container-fluid g-pb-60">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{$news->image}}" alt="Image Description">
                </div>

                <div class="col-md-5 g-mb-50 g-mb-0--md">
                    <div class="mb-5">
                        <h2 class="mb-3">{{$news->title}}</h2>
                        <div class="text-right g-font-size-12 g-color-gray-dark-v4">
                            <i class="fa fa-calendar g-mr-5"></i> {{$news->posted_date? $news->posted_date->format('d-m-Y') : ''}}
                        </div>
                        <p>{{$news->short_description}}</p>
                    </div>
                    <a class="btn u-shadow-v39 g-brd-main g-brd-primary--hover g-color-main g-color-white--hover g-bg-primary--hover g-font-size-default g-rounded-30 g-px-35 g-py-11"
                        href="/news/{{$news->id}}">@lang('learn_more')</a>
                </div>
            </div>
        </div>
        <!-- End Response to Recent Postering Incidents -->


        @else
        <!-- Unify Competency Model -->
        <div class="container-fluid g-pb-60">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-md-6 order-md-2">
                    <img class="img-fluid" src="{{$news->image}}" alt="Image Description">
                </div>

                <div class="col-md-5 order-md-1 g-mb-50 g-mb-0--md">
                    <div class="mb-5">
                        <h2 class="mb-3">{{$news->title}}</h2>
                        <div class="text-right g-font-size-12 g-color-gray-dark-v4">
                            <i class="fa fa-calendar g-mr-5"></i> {{$news->posted_date? $news->posted_date->format('d-m-Y') : ''}}
                        </div>
                        <p>{{$news->short_description}}</p>
                    </div>
                    <a class="btn u-shadow-v39 g-brd-main g-brd-primary--hover g-color-main g-color-white--hover g-bg-primary--hover g-font-size-default g-rounded-30 g-px-35 g-py-11"
                        href="/news/{{$news->id}}">@lang('learn_more')</a>
                </div>
            </div>
        </div>
        <!-- End Unify Competency Model -->
        @endif
        @endforeach
    </div>

</div>

@endsection
