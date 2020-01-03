<title>{{$datas->fullname_kh}} | GIC</title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('faculty_staff'),
    'current' => __('Detail'),
    'pages' => [[
        'url' => '/gic-staff',
        'title' => __('faculty_staff')
    ]]
])
    <div class=" g-pos-rel" style="background-color: #D3E2ED;">
        <div class="container-fluid g-pt-45 g-pl-0 ">
            <div class=" col-lg-12 g-pl-15 g-pr-0 justify-content-between row">
                <div class="row col-lg-8  g-pr-0">
                <div class="col-lg-6 g-mb-15 g-py-20--lg">
                    <div class=" g-max-width-auto  g-brd-secondary justify-content-lg-center">
                        <img class=" shadow rounded img-cover"
                             style=" max-width: 100%;max-height: 100% ;  height: 380px; width: 320px"
                             src="
                    <?php if (isset($datas->profile_picture)) {
                                 echo '/storage/' . $datas->profile_picture;
                             } else {
                                 echo "/storage/staffs/default/user-default.png";
                             } ?>" alt="Image Description">
                    </div>
                </div>
                <div class="col-lg-6 g-pt-50 g-pl-10 g-px-0 ">
                    <h1 class="g-font-size-36  g-color-black g-pt-40 g-pr-10"> {{$datas->fullname_en}} </h1>
                    <p class="g-color-black-opacity-0_6 g-pt-0 font-italic g-font-size-22"><?php if (isset($dataPosition->staff_position)) {
                        echo $dataPosition->staff_position;
                    } else {
                        echo 'Not Yet Define';
                    }?>
                </div>
                </div>
                <div class="col-lg-4 g-pl-40 g-mr-0 g-pt-70 " >
                    <p class="g-color-black">Name in Khmer: <span class="g-font-size-16">{{$datas->fullname_kh}}</span></p>
                    <p class="g-color-black">Position:  <span class="g-font-size-16">{{$dataPosition->staff_position}}</span></p>
                    <p class="g-color-black">Phone Number: <span class="g-font-size-16">{{$datas->phone_number}}</span></p>
                    <p class="g-color-black">Email Address:  <span class="g-font-size-16">{{$datas->email}}</span></p>
                </div>
            </div>
        </div>
        <svg class="g-pos-abs g-bottom-0" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1921 183.5" enable-background="new 0 0 1921 183.5" xml:space="preserve">
          <path fill="#FFFFFF" d="M0,183.5v-142c0,0,507,171,1171,58c0,0,497-93,750,84H0z"/>
            <path opacity="0.2" fill="#FFFFFF" d="M0,183V0c0,0,507,220.4,1171,74.7c0,0,497-119.9,750,108.3H0z"/>
        </svg>
    </div>
    <div class="container-fluid g-pt-10 g-pb-30">
        <h1 class="text-center h1"> Biography</h1>
        <div class="container-fluid g-font-size-20 g-mt-25 g-py-23 g-px-30 border">
            <p class="g-font-size-18">{!!$datas->biography!!}</p>


            <!-- End Links -->
        </div>
    </div>
    </div>
    </div>
@endsection
<style>

    imgs {
        width: 100%;
    }
</style>
