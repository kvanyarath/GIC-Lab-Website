@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('staff_mobility'),
    'current' => __('Detail'),
    'pages' => [[
        'url' => '/staffMobility',
        'title' => __('staff_mobility')
    ]]
])
    <div class=" g-pos-rel" >
        <div class="container-fluid g-pt-30">
            <div class="row justify-content-lg-between">
                <div class="col-lg-6 ">
                    <div class="col-lg-6 g-pl-170 g-mb-20 g-pt-20--lg  ">
                        <div class=" g-max-width-auto g-brd-secondary  justify-content-lg-center">
                            <img class=" "style="width: 280px"  src="
                    <?php if(isset($datas->profile_picture)){
                                echo '/storage/' . $datas->profile_picture;
                            }else{echo "/storage/staffs/default/user-default.png";} ?>" alt="Image Description">
                        </div>
                    </div>

                    <!-- <a class="js-go-to btn u-shadow-v33 g-hidden-md-down g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-10" href="#!" data-target="#content">Explore Now</a> -->
                </div>
                <div class="col-lg-6  g-pl-0 ">
                    <div class="mb-4 ">
                        <h2 class="g-font-size-40 mb-2 g-color-black g-pt-80 g-pl-0"> {{$datas->fullname_en}}</h2>
                        <p class="g-color-black-opacity-0_8 font-italic g-font-size-18"><?php if(isset($datas->name)){echo $datas->name;} else{echo'Country Not Yet Define';}?>, <?php echo $s_day;if($s_day == 1 || $s_day == 21 || $s_day == 31)echo 'st';elseif ($s_day==2 || $s_day==22)echo'nd';elseif($s_day==3)echo'rd';else echo"th"?>/{{$s_month}}/20{{$s_year}} - <?php echo $e_day;if($e_day == 1 || $e_day == 21 || $e_day == 31)echo 'st';elseif ($e_day==2 || $e_day==22)echo'nd';elseif($e_day==3)echo'rd';else echo"th"?>/{{$e_month}}/20{{$e_year}}
                    </div>
                    <!-- <a class="js-go-to btn u-shadow-v33 g-hidden-md-down g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-10" href="#!" data-target="#content">Explore Now</a> -->
                </div>
            </div>
        </div>
        <div class="container-fluid g-font-size-20 g-mt-25"><p>{!! $datas->description !!}</p></div>
@endsection
<style>
    hr.style-two {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }
</style>
