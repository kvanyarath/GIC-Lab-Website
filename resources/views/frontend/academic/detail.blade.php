@extends('layouts.main')

@section('style')
@endsection

@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('programs'), 'current' => $program->title])
<!-- Programs -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            @include('frontend.partials.title', ['title' => $program->title])
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9 g-mb-70">
            <!-- Nav tabs -->
            <ul class="nav u-nav-v1-1  u-nav-primary g-mb-20" role="tablist" data-target="nav-1-1-default-hor-left"
                data-tabs-mobile-type="slide-up-down"
                data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-lightgray g-mb-20">
                <li class="nav-item">
                    <a class="nav-link @if($field == 'text_detail') active @endif" data-toggle="tab" href="#nav-1-1-default-hor-left--1"
                        role="tab">@lang('about_the_program')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($field == 'curriculum') active @endif" data-toggle="tab" href="#nav-1-1-default-hor-left--2"
                        role="tab">@lang('curriculum')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($field == 'entrance_selection') active @endif" data-toggle="tab" href="#nav-1-1-default-hor-left--3"
                        role="tab">@lang('entrance_selection')</a>
                </li>
            </ul>
            <!-- End Nav tabs -->

            <!-- Tab panes -->
            <div id="nav-1-1-default-hor-left" class="tab-content">
                <div class="tab-pane fade @if($field == 'text_detail') show active @endif" id="nav-1-1-default-hor-left--1" role="tabpanel">
                    {!! $program['text_detail'] !!}
                </div>
                <div class="tab-pane fade @if($field == 'curriculum') show active @endif" id="nav-1-1-default-hor-left--2" role="tabpanel">
                    {!! $program['curriculum'] !!}
                </div>
                <div class="tab-pane fade @if($field == 'entrance_selection') show active @endif" id="nav-1-1-default-hor-left--3" role="tabpanel">
                    {!! $program['entrance_selection'] !!}
                </div>
            </div>
            <!-- End Tab panes -->
        </div>

        <div class="col-lg-3 g-mb-70">
            @include('frontend.academic.partials.relate-link')
        </div>
    </div>

</div>
<!-- End Programs -->
@endsection

@section('script')
<!-- JS Unify -->
<script src="/unify/html/assets/js/components/hs.tabs.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });

</script>

@endsection
