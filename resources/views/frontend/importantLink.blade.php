
<title> Important Link | GIC</title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('others_urls')])

    <h1 class="text-center g-pt-60 g-mb-40">@lang('others_urls')</h1>


    <div class="row list-group g-mx-100">
        <div class="row col-lg-12 g-mb-20 g-ml-10">
            <?php
            if(isset($datas)){
                foreach ($datas as $data){
                    echo ' <div class="col-lg-4 g-bg-secondary text-center g-mb-10 ">';
                    echo '    <a  target="_blank"  href="'.$data->url.'" class=" nav-link  u-shadow-v1-1 each_element text-dark rounded g-pt-10 g-pb-7 g-mb-5 ">';
                    echo '        <h5><span class=" child g-pl-25 g-pr-25 each_element " >';
                    if(\App::getLocale() == 'km') {echo $data->title_kh;} else{echo $data->title_en;}

                    echo '        </h5>
                               </a>
                            </div>';
                }
            }else{
                echo '
                                <p>Empty</p>';
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
    h1 h2{
        text-shadow: 0 0 1px;
    }
    hr.style-two {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }


    .each_element:hover { background-color: #203E61; TEXT-DECORATION: none; }
    .each_element:hover span{
        color:white
    }

</style>
