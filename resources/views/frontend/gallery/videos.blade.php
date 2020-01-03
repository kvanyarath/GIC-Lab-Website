@extends('layouts.main')

@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('video_gallery')])

@include('frontend.partials.title', ['title' => __('video_gallery')])

<div class="container-fluid g-py-30">
    <!-- Works - Content -->
    <div class="container-fluid">
        @if(!empty($videos))
        <div class="row">
            @isset($videos[0])
            <!-- Video Article -->
            <div class="col-lg-8 g-mb-30">
                <div class="h-100 g-bg-size-cover g-bg-pos-center g-bg-cover g-bg-black-opacity-0_4--after g-pos-rel g-py-150 g-mb-30 g-mb-0--lg"
                    data-bg-img-src="https://img.youtube.com/vi/{{$videos[0]->youtube_id}}/0.jpg">
                    <article class="text-center g-absolute-centered w-100 g-z-index-1 g-px-50">
                        <a class="js-fancybox d-inline-block g-text-underline--none--hover mb-3" href="javascript:;"
                            data-src="//www.youtube.com/embed/{{$videos[0]->youtube_id}}?autoplay=1" data-speed="350"
                            data-caption="{{$videos[0]->title}}">
                            <span
                                class="u-icon-v3 u-icon-size--xl u-icon-scale-1_2--hover g-bg-primary g-color-white rounded-circle g-cursor-pointer">
                                <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
                            </span>
                        </a>
                        <h4 class="g-color-white">{{$videos[0]->title}}</h4>
                    </article>
                </div>
            </div>
            <!-- End Video Article -->
            @endisset
            <div class="col-lg-4 g-mb-30">
                @isset($videos[1])
                <!-- Video Article -->
                <div class="g-bg-size-cover g-bg-pos-center g-bg-cover g-bg-black-opacity-0_4--after g-pos-rel g-py-50 g-mb-30"
                    data-bg-img-src="https://img.youtube.com/vi/{{$videos[1]->youtube_id}}/0.jpg">
                    <article class="text-center g-pos-rel g-z-index-1 g-px-20">
                        <a class="js-fancybox d-inline-block g-text-underline--none--hover mb-3" href="javascript:;"
                            data-src="//www.youtube.com/embed/{{$videos[1]->youtube_id}}?autoplay=1" data-speed="350"
                            data-caption="{{$videos[1]->title}}">
                            <span
                                class="u-icon-v3 u-icon-size--md u-icon-scale-1_2--hover g-bg-primary g-color-white rounded-circle g-cursor-pointer">
                                <i class="g-font-size-13 g-pos-rel g-left-2 fa fa-play"></i>
                            </span>
                        </a>
                        <h4 class="h5 g-color-white">{{$videos[1]->title}}</h4>
                    </article>
                </div>
                <!-- End Video Article -->
                @endisset
                @isset($videos[2])
                <!-- Video Article -->
                <div class="g-bg-size-cover g-bg-pos-center g-bg-cover g-bg-black-opacity-0_4--after g-pos-rel g-py-50 g-mb-30 g-mb-0--lg"
                    data-bg-img-src="https://img.youtube.com/vi/{{$videos[2]->youtube_id}}/0.jpg">
                    <article class="text-center g-pos-rel g-z-index-1 g-px-20">
                        <a class="js-fancybox d-inline-block g-text-underline--none--hover mb-3" href="javascript:;"
                            data-src="//www.youtube.com/embed/{{$videos[2]->youtube_id}}?autoplay=1" data-speed="350"
                            data-caption="{{$videos[2]->title}}">
                            <span
                                class="u-icon-v3 u-icon-size--md u-icon-scale-1_2--hover g-bg-primary g-color-white rounded-circle g-cursor-pointer">
                                <i class="g-font-size-13 g-pos-rel g-left-2 fa fa-play"></i>
                            </span>
                        </a>
                        <h4 class="h5 g-color-white">{{$videos[2]->title}}</h4>
                    </article>
                </div>
                <!-- End Video Article -->
                @endisset
            </div>
        </div>
        @endif
    </div>
    <!-- End Works - Content -->
    <div>
        <div class="row g-mb-30 g-px-10 g-mt-30">

            @foreach($videos as $video)
            @if( in_array($loop->index, [0, 1, 2]) )
            @continue
            @endif
            <!-- Video Blocks -->
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Fancybox Video -->
                <div
                    class="u-shadow-v36 g-brd-around g-brd-7 g-brd-white g-brd-primary--hover rounded g-pos-rel g-transition-0_2">
                    <img class="img-fluid"
                        src="https://img.youtube.com/vi/{{$video->youtube_id}}/0.jpg"
                        alt="Image Description">
                    <a class="js-fancybox g-absolute-centered" href="javascript:;"
                        data-src="//www.youtube.com/watch?v={{$video->youtube_id}}" data-speed="350" data-caption="{{$video->title}}">
                        <span
                            class="u-icon-v3 u-icon-size--lg g-color-white g-color-primary--hover g-bg-transparent g-font-size-30 rounded-circle g-cursor-pointer">
                            <i class="g-pos-rel g-left-2 fa fa-play"></i>
                        </span>
                    </a>
                </div>
                <!-- End Fancybox Video -->
                <!-- video title -->
                <div class="text-center g-mt-10">
                    <span>{{$video->title}}</span>
                </div>
                <!-- end video title -->
            </div>
            <!-- End Video Blocks -->
            @endforeach
        </div>

    </div>
</div>

@endsection
