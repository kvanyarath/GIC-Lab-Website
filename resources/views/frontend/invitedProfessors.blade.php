<title>Invited Professor/Researcher | GIC</title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('invited_professor')])
    <!-- Promo Block -->
    <div class="container-fluid text-center g-mt-60">
        <h1 class="h1 g-font-size-40--md g-mb-20 text-center">@lang('invited_professor')</h1>
        <h4 class="text-center g-mb-40">@lang('invited_professor_description')</h4>
        <!-- End Heading -->
    </div>
    <!-- End Heading -->


    @foreach ($datas as $data)

    <div class=" row justify-content-lg-center g-pt-50 g-px-120--md " style="background-color: #F5F6FB;">

        <div class="col-md-3 col-lg-2 g-pt-10 g-pl-0  g-mb-60">
            <img class="img-thumbnail g-height-220 u-shadow-v36 mx-auto photos rounded-left rounded-right"
                 src="
            @if (isset($data->profile_photo))
                         /storage/{{$data->profile_photo}}
                 @else
                         /storage/staffs/default/user-default.png
@endif
                         " alt="Image Description">
        </div>
        <div class="col-md-9 col-lg-8 g-pr-0 posted_date ">
            <blockquote class="g-brd-left-none  g-font-size-22 g-pl-0"><b>{{$data->name}}</b></blockquote>
            @if (strlen($data->short_bio_description) >= 360)
                <blockquote
                        class="g-brd-left-none  g-font-size-18 g-pl-0">{{substr(strip_tags($data->short_bio_description), 0, 360)}}
                    ... <br><a class="btn g-font-weight-600 u-btn-outline-primary g-mt-10 g-pt-0 g-pb-5 g-rounded-10 g-px-10 "
                           href="/invited-professors/{{$data->id}}">Read more</a></blockquote>
                <span class=""><hr class="g-width-760 justify-content-center"style=""></span>

            @else
                <blockquote
                        class="g-brd-left-none g-font-size-18 g-pl-0">{{substr(strip_tags($data->short_bio_description), 0, 360)}}
                    <br><a class="btn g-font-weight-600 g-mt-10 u-btn-outline-primary  g-pt-0 g-pb-5 g-rounded-10 g-px-10 "
                           href="/invited-professors/{{$data->id}}">Read more</a></blockquote>
                <span class=""><hr class="g-width-760 justify-content-center"style=""></span>


            @endif
        </div>
    </div>


    @endforeach

    <div class="float-right g-mt-20 g-mb-20">
        {{ $datas->links() }}

    </div>
    <br><br><br><br>

    <!--end pagination-->
@endsection

<style>


    a:hover {
        text-decoration: none;
    }

    .posted_date {
        position: relative;
    }

    .posted_date span {
        position: absolute;
        bottom: -30;
        right: 0;
    }

</style>
