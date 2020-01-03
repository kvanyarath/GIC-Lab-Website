<!-- Clients -->
<div class="container-fluid g-pt-30 g-pb-30">
    <!-- Heading -->
    <div class="g-max-width-645 text-center mx-auto g-mb-30">
    <a style="text-decoration: none; color: black;" target="_blank" href="/partners/{{$type}}"><h2 class="h1 mb-3">{{$title}}</h2></a>
    </div>
    <!-- End Heading -->
    <div class="js-carousel" data-infinite="true" data-variable-width="true" data-autoplay="true" data-lazy-load="ondemand" data-slides-show="5">
        @foreach($data as $partner) 
        <div class="js-slide u-block-hover" style="margin-left: 15px; margin-right: 15px;">
            <a href="{{substr( $partner->website, 0, 4 ) === 'http' ? $partner->website : '//'.$partner->website}}" target="_blank">
            <img class="mx-auto g-height-100 g-cursor-pointer"
                data-lazy="{{Storage::url($partner->logo)}}" alt="{{$partner->name}}" title="{{$partner->name}}">
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- End Clients -->
