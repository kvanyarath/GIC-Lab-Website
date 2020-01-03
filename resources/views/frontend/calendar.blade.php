<title>Academic Calendar | GIC</title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Calendar')])
    <div class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg1.svg);">
        <!-- Heading -->
        <div class="g-max-width-645 text-center mx-auto g-pt-60 g-mb-50">
            <h2 class="h1 mb-3 ">Academic Calendar for {{$calendar->year}}</h2>
        </div>
        <!-- Heading -->

        <div class="container-fluid g-px-0">
            <div style="margin: 0 auto; width : 100%; height:1000px;">
            <?php $file = (json_decode($calendar->file_location))[0]->download_link; ?>
            <object data="storage/{{$file}}#view=fitH"  type="application/pdf"  width="100%" height="100%"></object>
            </div>

        </div>

        <br>
        <br>
        <br>
    </div>
@endsection
