@extends('layouts.main')

@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Partners')])

<main>

    <div class="container-fluid g-pt-100">
        <h4 class="h2 g-mb-30 text-center">
            {{$partnerType['display_name']}}
        </h4>
        <div class="row">
            @foreach($partnerType->partners as $partner) 
            <div class="col-md-3 g-mb-30--md">
                <div class="text-center u-block-hover">
                    <img class="u-block-hover__img u-block-hover__main--blur"
                        src="{{Storage::url($partner->logo)}}" alt="{{$partner->name}}">
                    <a class="js-fancybox d-block u-block-hover__additional--blur g-bg-primary g-color-white g-pa-30"
                        href="javascript:;" data-fancybox="partner"
                        data-src="{{Storage::url($partner->logo)}}" data-animate-in="bounceInDown"
                        data-animate-out="bounceOutDown" data-speed="1000" data-overlay-blur-bg="true"
                        data-caption="{{$partner->name}}">
                        <strong class="h5 d-block w-100 g-absolute-centered g-font-weight-400">{{$partner->name}}</strong>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>

@endsection

@section('style')
<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="/unify/html/assets/vendor/icon-hs/style.css">
<link rel="stylesheet" href="/unify/html/assets/vendor/fancybox/jquery.fancybox.min.css">
@endsection

@section('script')
<!-- JS Implementing Plugins -->
<!-- <script src="/unify/html/assets/vendor/fancybox/jquery.fancybox.min.js"></script> -->

<!-- JS Unify -->
<script src="/unify/html/assets/js/components/hs.popup.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');
    });

</script>
@endsection