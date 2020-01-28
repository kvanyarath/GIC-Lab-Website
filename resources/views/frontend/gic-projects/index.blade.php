@extends('layouts.main')

@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('projects')])
@include('frontend.partials.title', ['title' => __('NLP Projects')])

<div class="container-fluid g-mb-100">

@foreach($gic_projects as $project)
    @if($loop->index % 2 == 0)
    <!-- Gallery -->
    <section class="container-fluid g-px-0">
        <div class="row align-items-center no-gutters">
            <div class="col-md-6 order-md-2">
                <div class="text-center g-pa-15x">
                    <div class="mb-5">
                        <h3 class="h1 g-color-black mb-4">{{$project->title}}</h3>
                        <p class="g-color-gray-dark-v4 g-font-size-16">{{$project->short_description}}</p>
                    </div>
                    <a class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13"
                        href="/gic-projects/{{$project->id}}">@lang('see_more')
                        <i class="ml-2 fa fa-long-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 order-md-1">
                <div class="g-flex-centered g-min-height-400 g-bg-secondary text-center">
                    <div class="u-shadow-v19 g-bg-white g-pa-25">
                        <img class="img-project img-fluid u-shadow-v21" src="{{$project->image}}" alt="GIC Project Thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery -->
    @endif
    @if($loop->index % 2 != 0)
    <!-- Gallery -->
    <section class="container-fluid g-px-0">
        <div class="row align-items-center no-gutters">
            <div class="col-md-6">
                <div class="text-center g-pa-15x">
                    <div class="mb-5">
                        <h3 class="h1 g-color-black mb-4">{{$project->title}}</h3>
                        <p class="g-color-gray-dark-v4 g-font-size-16">{{$project->short_description}}</p>
                    </div>
                    <a class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13"
                        href="/gic-projects/{{$project->id}}">@lang('see_more')
                        <i class="ml-2 fa fa-long-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="g-flex-centered g-min-height-400 g-bg-secondary text-center">
                    <div class="u-shadow-v19 g-bg-white g-pa-25">
                        <img class="img-project img-fluid u-shadow-v21" src="{{$project->image}}" alt="GIC Project thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery -->
    @endif
@endforeach

<div class="g-mt-30">
  {{$gic_projects->links()}}
</div>
</div>

@endsection
