<title>Scholarships</title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Scholarships')])

    <!-- Heading -->
    <div class="container-fluid text-center g-pt-60 ">
            <h1 class="h1 g-font-size-40--md g-mb-20 text-center">@lang('scholarships')</h1>
            <h4 class="text-center g-mb-40">@lang('scholarships_description')</h4>
        <!-- End Heading -->
    </div>

        <div class="list-group g-mx-100">
            <div class="g-mx-50">
                <?php
                    if(isset($datas)){
                        foreach ($datas as $data){
                            $timestamp = strtotime($data->posted_date);
                            $month = date('M', $timestamp);
                            $day =date('d',$timestamp);
                            $y = date('y',$timestamp);
                            echo ' <div class="g-bg-secondary ">';
                            echo '    <a href="scholarships/'.$data->id.'" class=" nav-link  u-shadow-v1-1 each_element text-dark rounded g-pt-10 g-pb-7 g-mb-5 ">';
                            echo '        <h5><span class=" child g-pl-25 g-pr-25 each_element " >';
                            if(\App::getLocale() == 'km') {echo $data->title_kh;} else{echo $data->title_en;}

                            echo '<span class=" g-opacity-0_8 g-pl-25 g-pr-25 h6"> - '.app('translator')->getFromJson('posted_on').' '.$day.''; if($day == 1 || $day == 21 || $day==31){echo 'st ';}elseif($day==2 ||$day==22){echo'nd ';}elseif($day==3){echo 'rd ';}else{echo'th ';};
                            echo app('translator')->getFromJson($month).', 20'.$y.'</span>

                                        </h5>
                                    </a>
                                </div>';
                        }
                     }else{
                        echo '
                                <div class="g-bg-secondary ">
                                    <a href="scholarships/hosdflkj" class=" nav-link  u-shadow-v1-1 each_element text-dark rounded g-pt-10 g-pb-7 g-mb-5 ">
                                        <h5><span class=" child g-pl-25 g-pr-25 each_element " >Scholarship to study master degree and phd in japan or the academic year in 2019-2020 </span>
                                            <br>
                                            <span class=" g-opacity-0_6 g-pl-25 g-pr-25">Posted on 20th May 2019</span>
                                        </h5>
                                    </a>
                                </div>
                                <div class="g-bg-secondary ">
                                    <a href="/scholarships/hi" class=" nav-link  u-shadow-v1-1 each_element text-dark rounded g-pt-10 g-pb-7 g-mb-5 ">
                                        <h5><span class=" child g-pl-25 g-pr-25 each_element " >Scholarship to study master degree and phd in japan or the academic year in 2019-2020 </span>
                                            <br>
                                            <span class=" g-opacity-0_6 g-pl-25 g-pr-25">Posted on 20th May 2019</span>
                                        </h5>
                                    </a>
                                </div>
                                <div class="g-bg-secondary ">
                                    <a href="/hello" class=" nav-link  u-shadow-v1-1 each_element text-dark rounded g-pt-10 g-pb-7 g-mb-5 ">
                                        <h5><span class=" child g-pl-25 g-pr-25 each_element " >Scholarship to study master degree and phd in japan or the academic year in 2019-2020 </span>
                                            <br>
                                            <span class=" g-opacity-0_6 g-pl-25 g-pr-25">Posted on 20th May 2019</span>
                                        </h5>
                                    </a>
                                </div>
                                <div class="g-bg-secondary ">
                                    <a href="/helsdaf" class=" nav-link  u-shadow-v1-1 each_element text-dark rounded g-pt-10 g-pb-7 g-mb-5 ">
                                        <h5><span class=" child g-pl-25 g-pr-25 each_element " >Scholarship to study master degree and phd in japan or the academic year in 2019-2020 </span>
                                            <br>
                                            <span class=" g-opacity-0_6 g-pl-25 g-pr-25">Posted on 20th May 2019</span>
                                        </h5>
                                    </a>
                                </div>';
                    }
                ?>
            </div>
        </div>
    <div class="float-right g-mt-20">
        {{ $datas->links() }}
    </div>
    <br><br><br>




@endsection
<style>

    .each_element:hover { background-color: #203E61; TEXT-DECORATION: none; }
    .each_element:hover span{
        color:white
    }
</style>
