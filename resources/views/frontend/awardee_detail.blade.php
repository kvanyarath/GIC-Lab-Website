@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Awardee'),
    'current' => __('Detail'),
    'pages' => [[
        'url' => '/awardee',
        'title' => __('Awardee')
    ]]
])
    <div class=" g-pos-rel" style="background-color: #D3E2ED;">
        <div class="container-fluid g-pt-30">
            <div class="row justify-content-lg-between g-lg-20">
                <div class="col-lg-6 ">
                    <div class="col-lg-9 g-pl-100 g-pr-120   g-mr-0 g-pt-20 g-pr-0">
                        <div class=" g-brd-secondary  justify-content-lg-center ">
                            <img style="object-fit:cover" class=" g-height-500 g-"  style="width: 650px" src="
                    <?php if(isset($datas->profile_photo)){
                                echo '/storage/' . $datas->profile_photo;
                            }else{echo "/storage/staffs/default/user-default.png";} ?>" alt="">
                        </div>
                    </div>

                    <!-- <a class="js-go-to btn u-shadow-v33 g-hidden-md-down g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-10" href="#!" data-target="#content">Explore Now</a> -->
                </div>
                <div class="col-lg-4 g-pl-50 g-pt-45 g-mb-50--md g-mb-50--sm">
                    <div class="">
                        <h1 class="g-font-size-38 g-pt-30 g-color-main g-pt-50 g-pl-0"> {{$datas->full_name}} </h1>
                        {{--<p class=" g-color-black-opacity-0_8 font-italic g-font-size-24 g-ml-30 "> Well receive in :  <b class="g-font-size-28 g-color-primary">{{$datas->name}} </b></p>--}}

                    </div>
                    <!-- <a class="js-go-to btn u-shadow-v33 g-hidden-md-down g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-10" href="#!" data-target="#content">Explore Now</a> -->
                </div>
            </div>
        </div>

        <!-- SVG Bottom Background Shape -->
        <svg class="g-pos-abs g-bottom-0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1921 183.5" enable-background="new 0 0 1921 183.5" xml:space="preserve">
          <path fill="#FFFFFF" d="M0,183.5v-142c0,0,507,171,1171,58c0,0,497-93,750,84H0z"/>
            <path opacity="0.2" fill="#FFFFFF" d="M0,183V0c0,0,507,220.4,1171,74.7c0,0,497-119.9,750,108.3H0z"/>
        </svg>
        <!-- End SVG Bottom Background Shape -->
    </div>
    <!-- End Promo Block -->

    <!-- About Current Students -->

    </div>
    <div class=" ">
        <div class="container-fluid g-py-30">
            <!-- Heading -->
            <div class="g-max-width-645 text-center mx-auto g-mb-30">
                <h1 class="h1">@lang("Detail Information")</h1>
            </div>
            <!-- End Heading -->
            <div class="card-group d-block d-md-flex g-mx-minus-4">
                <div class="card g-brd-none g-mx-4 g-mb-8">
                    <p class=" g-font-size-18">{!!$datas->text_description!!}</p>





                    <!-- End Links -->
                </div>
            </div>
        </div>
    </div>
@endsection
<style>

    imgs{
        width: 100% ;
    }
</style>
