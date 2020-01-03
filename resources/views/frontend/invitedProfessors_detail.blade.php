<title>Invited Professor/Researcher | GIC</title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('invited_professor'),
    'current' => __('Detail'),
    'pages' => [[
        'url' => '/invited-professors',
        'title' => __('invited_professor')
    ]]
])
    <div class=" g-pos-rel" >
        <div class="container-fluid g-pt-30">
            <div class="row justify-content-lg-between">
                <div class="col-lg-6 ">
                    <div class="col-lg-6 g-pl-170 g-mb-20 g-pt-20--lg  ">
                        <div class="  g-brd-secondary  justify-content-lg-center">
                            <img class="g-min-width-300 g-height-350"style="max-width: 100%;max-height: 100%"  src="
                    <?php if(isset($datas->profile_photo)){
                                echo '/storage/' . $datas->profile_photo;
                            }else{echo "/storage/staffs/default/user-default.png";} ?>" alt="Image Description">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6  g-pl-0 ">
                    <div class="mb-4 ">
                        <h2 class="g-font-size-40 mb-2 g-color-black g-pt-60 g-pl-0"> {{$datas->name}}</h2>
                        @if (strlen($datas->short_bio_description) >= 320)
                            <blockquote
                                    class="g-brd-left-none  g-font-size-18 g-pl-0">{{substr(strip_tags($datas->short_bio_description), 0, 320)}}...
                            </blockquote>

                        @else
                            <blockquote
                                    class="g-brd-left-none g-font-size-18 g-pl-0">{{substr(strip_tags($datas->short_bio_description), 0, 320)}}
                                 <br></blockquote>
                            @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid g-font-size-20 g-mt-25 g-py-23 g-px-30 border "><p >{!! $datas->long_desc !!}</p></div>

    </div>
    <br>
        @endsection

