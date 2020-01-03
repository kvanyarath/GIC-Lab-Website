@extends('layouts.main')

@section('container')
@include('frontend.partials.breadcrumb', [
    'title' => __('projects'), 
    'pages' => [[
        'title' => __('projects'),
        'url' => '/gic-projects'
    ]],
    'current' => $gic_project->title
])
@include('frontend.partials.title', ['title' => $gic_project->title])

<div class="container-fluid g-mt-50">
    <div class="text-right g-mb-10">
        @lang('Status') : {{$gic_project->ongoing_project ? __('Ongoing') : __('Completed')}}
    </div>
    {!! $gic_project->description !!}
</div>

@endsection
