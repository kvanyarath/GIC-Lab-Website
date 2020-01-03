@extends('layouts.main')

@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('gallery.photos')])

<div class="container-fluid g-pt-60 g-py-30">

    <h4 class="h1 g-font-size-40--md g-mb-30 text-center">
        @lang('gallery.photos')
    </h4>
    @foreach($photoAlbums as $album)
    <div>
        <hr class="g-brd-gray-light-v4 g-my-60">
        <div class="row">
            <div class="col-md-3">
                <h3 class="h4 g-font-weight-300 g-mb-30">{{$album->displayName}}</h3>
                <p>
                    {{$album->displayText}}
                </p>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @foreach($album->photos as $photo)
                    <div class="col-md-4 g-mb-30">
                        <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--{{$album->id}}"
                            data-src="{{Storage::url($photo->file_location)}}" data-caption="Lightbox Gallery">
                            <img class="img-fluid" src="{{Storage::url($photo->file_location)}}" alt="Image Description">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
</div>

<div class="shortcode-styles">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="unify/html/assets/vendor/fancybox/jquery.fancybox.min.css">
</div>

<div class="shortcode-scripts">
    <!-- JS Implementing Plugins -->
    <script src="unify/html/assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script src="unify/html/assets/js/components/hs.popup.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox', {
                transitionEffect: false
            });
        });

    </script>
</div>

@endsection
