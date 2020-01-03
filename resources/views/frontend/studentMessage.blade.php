<title>Student Message</title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Alumni')])

    <!-- Promo Block -->

        <div class="container-fluid text-center g-pt-60 g-mb-60 ">
            <!-- Heading -->
            <div class="g-mb-20">
                <h1 class="h1 ">@lang("Let Hear From Our Alumni") </h1>
            </div>
            <hr class="style-two g-width-400">
            <!-- End Heading -->
        </div>
        <!-- Testimonials -->
    <?php
    foreach ($datas as $data) {
        $timestamp = strtotime($data->posted_date);
        $month = date('M', $timestamp);
        $day = date('d', $timestamp);
        $y = date('y', $timestamp);
        echo '<div class="container-fluid">

            <!-- Testimonials -->
            <div class="row justify-content-lg-center g-mb-0 ">
                <div class="col-md-3 col-lg-2 g-mb-10 text-center">
                    <img class="img-thumbnail w-90 img-cover g-height-220 u-shadow-v36 rounded mx-auto" src="';
        if (!isset($data->photo_url)) {
            echo 'assets/img-temp/200x200/img3.jpg';
        } else {
            echo '/storage/' . $data->photo_url;
        }
        echo '" alt="Image Description">
                </div>
                <div class="col-md-9 col-lg-8 g-mb-10">
                    <!-- Testimonials - Content -->
                    <div class="media mb-3">
                        <div class="d-flex mr-3">
                            <span class=" g-font-secondary g-font-size-40 g-opacity-0_3 g-pos-rel g-top-minus-10">&#8220;</span>
                        </div>
                        <div class="media-body">
                            <blockquote class="g-color-main g-brd-left-none g-font-style-italic g-font-size-20 g-pl-0">' . $data->content_en . '
                                <span class="align-self-end g-font-secondary g-font-size-40 g-opacity-0_3 g-line-height-0 align-bottom g-pos-rel g-top-minus-10">&#8221;</span> <span class="g-opacity-0_9">&nbsp&nbsp&nbsp&nbsp<b>' . $data->name . '</b>, graduated in <b>' . $data->graduated_year . '</b></span>.
                            </blockquote>
                            <span class="float-right mr-5"><h3 class="h4 g-color-black-opacity-0_7 mb-0">Posted on, 20' . $y . '-' . $month . '-' . $day . '</h3>
                                </span>

                        </div>
                    </div>
                    <!-- End Testimonials - Content -->
                </div>
            </div>
        </div>
            <hr class="style-two g-width-900 g-mb-40">';
    }?>
    <!--pagination-->
        <div class="float-right mt-0">
            {{ $datas->links() }}
        </div>
        <br><br><br>
        <!--end pagination-->

@endsection

<style>
    hr.style-two {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }
</style>
