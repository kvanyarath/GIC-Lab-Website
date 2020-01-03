@extends('layouts.main')

@section('style')

<link rel="stylesheet" href="/unify/html/assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">

@endsection

@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('posters')])

@include('frontend.partials.title', ['title' => __('posters')])


<!-- Section Content -->
<section id="topWorks" class="g-pt-30 g-pb-80">
        <div class="container-fluid">

          <div class="row">

            <div class="col-12">
              <div id="topWorksCubePortfolio" class="cbp"
                   data-controls="#topWorksCubePortfolioFilter"
                   data-layout="grid"
                   data-animation="slideLeft"
                   data-caption-animation="fadeIn"
                   data-x-gap="30"
                   data-y-gap="80"
                   data-media-queries='[
                     {"width": 800, "cols": 3},
                     {"width": 500, "cols": 2},
                     {"width": 320, "cols": 1}
                   ]'>

                @foreach($posters as $p)
                <div class="cbp-item">
                  <a class="cbp-caption cbp-lightbox info-v3-2 d-block g-parent g-mb-20" href="{{$p->poster}}"
                     data-title="">
                    <div class="cbp-caption-defaultWrap g-overflow-hidden">
                      <img class="g-transform-scale-1_2--parent-hover g-transition-0_2 g-transition--ease-in" src="{{$p->thumbnail}}" alt="Image description">
                    </div>

                    <div class="cbp-caption-activeWrap g-theme-bg-blue-dark-v1-opacity-0_6">
                      <div class="cbp-l-caption-alignCenter g-pa-15">
                        <div class="cbp-l-caption-body g-brd-around g-brd-white-opacity-0_2">
                          <strong class="text-uppercase g-absolute-centered g-letter-spacing-0_5 g-font-weight-700 g-font-size-11 g-color-white">@lang('view_poster')</strong>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="g-mt-30">
                <div>
                {{$posters->links()}}
                </div>
          </div>
        </div>
      </section>
      <!-- End Section Content -->

@endsection

@section('script')
<script src="/unify/html/assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="/unify/html/assets/js/components/hs.cubeportfolio.js"></script>
<script>
    $(function() {
        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');
    })
</script>

@endsection