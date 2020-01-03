<title>Staff's mobilities | GIC</title>
@extends('layouts.main')
@section('container')

@include('frontend.partials.breadcrumb', ['title' => __('staff_mobility')])

    <!-- Promo Block -->
    <div class="container-fluid text-center g-mt-60">
        <h1 class="h1 g-font-size-40--md g-mb-20 text-center">@lang('staff_mobility')</h1>
        <!-- <h4 class="text-center g-mb-40">@lang('staff_mobility_description')</h4> -->
        <!-- End Heading -->
    </div>
    <!-- End Heading -->
    <div class="container-fluid">
    <?php
    foreach ($datas as $data) {
        $timestamp = strtotime($data->post_date);
        $month = date('M', $timestamp);
        $day = date('d', $timestamp);
        $y = date('y', $timestamp);
        if ($i % 2 == 0) {
            echo ' <div class=" row justify-content-lg-center g-pt-50 g-px-120--md "style="background-color: #F5F6FB;">';
            echo '
                <div class="col-md-3 col-lg-2 g-pt-10 g-pl-0  g-mb-60">
                    <img class="img-fluid u-shadow-v36 mx-auto imgs photos rounded-left rounded-right" width="300" height="300" src="';
            if (isset($data->profile_picture)) {
                echo '/storage/' . $data->profile_picture;
            } else {
                echo '/storage/staffs/default/user-default.png';
            }
            echo ' " alt="Image Description">';
            echo '</div>';

            echo '<div class="col-md-9 col-lg-8 g-pr-0 posted_date ">
                    <blockquote class="g-brd-left-none  g-font-size-22 g-pl-0"><b>' . $data->fullname_en . '</b></blockquote>
                    ';
            if (strlen($data->description) >= 455) {
                echo '
                    <blockquote class="g-brd-left-none  g-font-size-18 g-pl-0">' . substr(strip_tags($data->description), 0, 455) . ' ... <a class="btn g-font-weight-600 u-btn-outline-primary  g-pt-0 g-pb-5 g-rounded-10 g-px-10 " href="/staffMobility/' . $data->id . '">Read more</a></blockquote>
             <span class="float-right mr-5 g-pb-0 "><h5 class="mb-0 g-color-black-opacity-0_6">Posted on, 20' . $y . '-' . $month . '-' . $day . '</h5>
                                </span>';
            } else {
                echo '<blockquote class="g-brd-left-none  g-font-size-18 g-pl-0">' . substr(strip_tags($data->description), 0, 465) . ' ... <a class="btn g-font-weight-600 u-btn-outline-primary  g-pt-0 g-pb-5 g-rounded-10 g-px-10 " href="/staffMobility/' . $data->id . '">Read more</a></blockquote>
                    <span class="float-right mr-5 g-pb-0 "><h5 class="mb-0 g-color-black-opacity-0_6">Posted on, 20' . $y . '-' . $month . '-' . $day . '</h5>
                                </span>';

            }
            echo '
                    <br>

                </div>
                </div>
            ';

            $i++;

        } else {
            echo ' <div class=" row justify-content-lg-center g-pt-60 g-px-100--md"  >';
            echo '
                <div class="col-md-9 col-lg-8 posted_date">
                    <blockquote class="g-brd-left-none  g-font-size-22 text-right g-pl-0"><b>' . $data->fullname_en . '</b></blockquote>
                    <blockquote class="g-brd-left-none g-font-size-18 g-pl-0">';
            if (strlen($data->description) >= 455) {
                echo substr(strip_tags($data->description), 0, 455) . '...
                        <a class="btn g-font-weight-600 u-btn-outline-primary  g-pt-0 g-pb-5 g-rounded-10 g-px-10 " href="/staffMobility/' . $data->id . '">Read more
                        </a>
                    </blockquote> <span class=" mr-5 g-pb-0 "><h5 class="mb-0 g-color-black-opacity-0_6">Posted on, 20' . $y . '-' . $month . '-' . $day . '</h5>
                                </span>';
            } else {
                echo substr(strip_tags($data->description), 0, 455) . '...
                        <a class="btn g-font-weight-600 u-btn-outline-primary  g-pt-0 g-pb-5 g-rounded-10 g-px-10 " href="/staffMobility/' . $data->id . '">Read more
                </a>
                    </blockquote> <span class=" mr-5 g-pb-0 "><h5 class="mb-0 g-color-black-opacity-0_6">Posted on, 20' . $y . '-' . $month . '-' . $day . '</h5>
                                </span>';
            }
            echo '
                </div>
                <br>
                 <div class="col-md-3 col-lg-2 g-pr-0 g-mb-60">
                    <img class="img-fluid u-shadow-v36 mx-auto rounded-left rounded-right imgs photos " width="300" height="300" src="';
            if (isset($data->profile_picture)) {
                echo '/storage/' . $data->profile_picture;
            } else {
                echo '/storage/staffs/default/user-default.png';
            }
            echo ' " alt="Image Description">';
            echo '</div></div> ';


            $i++;
        }
    }
    ?>

    <div class="float-right g-mt-20 g-mb-20">
        {{ $datas->links() }}

    </div>
    <br><br><br><br>
    </div>
    <!--end pagination-->
@endsection

<style>
    imgs {
        width: 100%;
    }

    a:hover {
        text-decoration: none;
    }

    .posted_date {
        position: relative;
    }

    .posted_date span {
        position: absolute;
        bottom: 10;
        right: 0;
    }

</style>
