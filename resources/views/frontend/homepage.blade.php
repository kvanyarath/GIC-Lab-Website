@extends('layouts.main')
@section('style')
<style>
  .section-content {
    font-size: 1.3rem;
    text-align: justify;
  }
  @media screen and (max-width: 600px) {
    .slide-title-btn {
      zoom: 0.5;
    }
  }
  .gray-indicator span {
    border-color: grey;
  }
  
</style>
@endsection
@section('container')
    <main>
      <!-- Carousel Slider -->
      <!-- data-calc-target="#js-header" -->
      <div class="js-carousel u-carousel-v5"
           data-infinite="true"
           data-autoplay="true"
           data-speed="8000"
           data-pagi-classes="u-carousel-indicators-v34 gray-indicator g-absolute-centered--y g-left-auto g-right-30 g-right-100--md"
           id="slierContainer" style="height: 140px;"
           >

        <!-- Carousel Slides -->
        @if(!empty($list_slide))
          @foreach($list_slide as $slide)
          <!-- for background blur -->
          <!-- g-bg-black-opacity-0_2--after -->
          <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-cover " style="background-image: url({{Storage::url($slide->image_path)}});">
            <div class="container-fluid" style="align-self:flex-end; padding-bottom: 10px;">
              <div class="g-max-width-600 g-pos-rel g-z-index-1">
                <a class="d-block g-text-underline--none--hover" href="#">
                  <span class="d-block g-color-white mb-2">
                    <a class="slide-title-btn btn btn-primary btn-xs" href="{{ $slide->link_to }}">
                    {!! $slide->title !!}
                    </a>
                  </span>
                  <span class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                    <!-- {!! $slide->description !!} -->
                  </span>
                </a>
              </div>

              <!-- Go to Button -->
              <!-- <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60" href="#!" data-target="#content">
                <span class="d-block u-go-to-v4 mr-3"></span>
                <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">scroll down</span> to find out more
              </a> -->
              <!-- End Go to Button -->
            </div>
          </div>
          <!-- End Carousel Slides -->
          @endforeach
        @else
        <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after" style="background-image: url(assets/img-temp/1920x1080/img5.jpg);">
          <div class="container-fluid">
            <div class="g-max-width-600 g-pos-rel g-z-index-1">
              <a class="d-block g-text-underline--none--hover" href="#">
                <span class="d-block g-color-white g-font-size-20--md mb-2">
                  Making an Impact : <span class="g-brd-bottom--dashed g-brd-2 g-brd-primary g-color-primary g-font-weight-700 g-pb-2">Careers Day</span>
                </span>
                <span class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                  Explore career options October 12 at the Unify Arena.
                </span>
              </a>
            </div>

            <!-- Go to Button -->
            <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60" href="#!" data-target="#content">
              <span class="d-block u-go-to-v4 mr-3"></span>
              <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">scroll down</span> to find out more
            </a>
            <!-- End Go to Button -->
          </div>
        </div>
        <!-- End Carousel Slides -->

        <!-- Carousel Slides -->
        <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-cover g-bg-black-opacity-0_2--after" style="background-image: url(assets/img-temp/1920x1080/img6.jpg);">
          <div class="container-fluid">
            <div class="g-max-width-600 g-pos-rel g-z-index-1">
              <a class="d-block g-text-underline--none--hover" href="#">
                <span class="d-block g-color-white g-font-size-20--md mb-2">
                  Discover Unify's Faculty of <span class="g-brd-bottom--dashed g-brd-2 g-brd-primary g-color-primary g-font-weight-700 g-pb-2">Chemistry</span>
                </span>
                <span class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                  Student work, Success stories, Faculty profiles, 360&#176; tours &amp; more
                </span>
              </a>
            </div>

            <!-- Go to Button -->
            <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60" href="#!" data-target="#content">
              <span class="d-block u-go-to-v4 mr-3"></span>
              <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">scroll down</span> to find out more
            </a>
            <!-- End Go to Button -->
          </div>
        </div>
        <!-- End Carousel Slides -->

        <!-- Carousel Slides -->
        <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-cover g-bg-black-opacity-0_3--after" style="background-image: url(assets/img-temp/1920x1080/img7.jpg);">
          <div class="container-fluid">
            <div class="g-max-width-600 g-pos-rel g-z-index-1">
              <a class="d-block g-text-underline--none--hover" href="#">
                <span class="d-block g-color-white g-font-size-20--md mb-2">
                  Fall <span class="g-brd-bottom--dashed g-brd-2 g-brd-primary g-color-primary g-font-weight-700 g-pb-2">Webinar Series</span>
                </span>
                <span class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                  See our full schedule and register now
                </span>
              </a>
            </div>

            <!-- Go to Button -->
            <!-- <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60" href="#!" data-target="#content">
              <span class="d-block u-go-to-v4 mr-3"></span>
              <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">scroll down</span> to find out more
            </a> -->
            <!-- End Go to Button -->
          </div>
        </div>
        <!-- End Carousel Slides -->
        @endif
      </div>
      <!-- End Carousel Slider -->

      <!-- Remove Comment to enable Find a Course Element-->
      <!-- End Find a Course -->

      <!-- Remove Comment to enable Learn First Steps -->
     
        @include('frontend.elements.firstStep')
       
      <!-- End Learn First Steps -->

      <!-- Remove Comment to enable  Researches -->
      <!-- End Researches -->

      <!-- Research Statistics -->
      <!-- End Research Statistics -->

      <!-- Testimonials -->
     
      @include('frontend.elements.testimonial')
     
      <!-- End Testimonials -->

      <!-- projects -->
      @include('frontend.elements.project')
      <!-- end projects -->
      <!-- Events -->
     
      @include('frontend.elements.events')
     
      <!-- End Events -->

      <!-- News -->
     
      @include('frontend.elements.news2')
     
      <!-- End News -->
      @if (!empty($company_partners)) 
        @include('frontend.elements.partners', ['title' => __('company_partners'), 'data' => $company_partners, 'type' => 'Company'])
      @endif
      @if (!empty($university_partners))
      @include('frontend.elements.partners', ['title' => __('university_partners'), 'data' => $university_partners, 'type' => 'University'])
      @endif
     
    </main>
@endsection
