@extends('layouts.main')

@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('events.seminar')])
<!-- University Events -->
<div class="container-fluid g-pt-60">
<h4 class="h1 g-font-size-40--md g-mb-30 text-center">
            @lang('events.events_talks')
        </h4>
    <div class="row">
    @foreach($events as $event)
        <div class="col-lg-6 g-mb-30">
            <!-- Event Listing -->
            <article class="u-shadow-v39">
                <div class="row">
                    <div class="col-4">
                        <div class="g-min-height-170 g-bg-img-hero"
                            style="background-image: url({{Storage::url($event->image)}});"></div>
                    </div>

                    <div class="col-8 g-min-height-170 g-flex-centered">
                        <div class="media align-items-center g-py-40">
                            <div class="d-flex col-8">
                                <h3 class="g-line-height-1 mb-0"><a
                                        class="u-link-v5 g-color-main g-color-primary--hover g-font-size-18"
                                        href="/events/{{$event->id}}">{{$event->getTranslatedAttribute('name')}}</a></h3>
                            </div>
                            <div class="media-body col-4">
                                <span
                                    class="g-color-primary g-font-weight-500 g-font-size-40 g-line-height-0_7">
                                    {{$event->start_date->format('d')}}</span>
                                <span class="g-line-height-0_7">{{$event->start_date->format('M')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!-- End Event Listing -->
        </div>
    @endforeach
    </div>

    <div>
    {{$events->links()}}
    </div>
</div>
<!-- End University Events -->

@endsection
