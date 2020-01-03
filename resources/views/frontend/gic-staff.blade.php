<title>Faculty & Staff | GIC</title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('faculty_staff')])

    <div class="g-bg-img-hero " style="background-image: url(assets/include/svg/svg-bg1.svg);">
        <!-- Heading -->
        <div class="g-max-width-645 text-center mx-auto g-pt-60 g-mb-60">
            <h2 class="h1 mb-3">Faculty Staffs</h2>
            <!-- <p>...</p> -->
        </div>
        {{--        End Heading--}}
        <?php $skip = '0';
        $first = 1;?>

            @foreach($positions as $position)

                    @if($skip != $position->group )
                <div class="container-fluid g-pb-50 ">
                        <h2 class="text-center">{{$position->group}}</h2>
                        <hr class="g-mt-0">
                        <div class="row g-lg-12 justify-content-center">
                            @foreach($staffs as $staff)
                                @if($position->group == $staff->group)
                                    <div class=" u-block-hover g-pb-10 col-lg-3 @if($first==1 || $first==2)g-mx-20 @endif g-max-width-auto g-my-10">
                                        <div class="g-overflow-hidden ">
                                            <img
                                                class="u-block-hover__main--zoom-v1 img-fluid  g-transition-0_5 g-width-400 img-cover"
                                                @if(isset($staff->profile_picture))
                                                src="/storage/{{$staff->profile_picture}}"
                                                @else
                                                src="/storage/staffs/default/Blank-Person-400x500.jpg"
                                                @endif
                                                alt="Image Description" style="height: 320px;">
                                        </div>
                                        <div class="u-shadow-v32 g-bg-white g-pa-30 g-width-400">
                                            <h3 class="h3 g-font-weight-500 mb-1 ">{{$staff->fullname_en}}</h3>
                                            @if(strlen($staff->staff_position ) > 24)
                                                <span class="d-block g-color-text-light-v1 g-font-size-16">{!! substr(strip_tags($staff->staff_position), 0, 24) !!}...</span>
                                            @else
                                                <span
                                                    class="d-block g-color-text-light-v1 g-font-size-16">{{$staff->staff_position}}</span>
                                            @endif
                                        </div>
                                        <a class="u-link-v2" href="/gic-staff/{{$staff->id}}"></a>
                                    </div>

                                @endif
                            @endforeach

                        </div></div></div>
                            @endif

                            <?php $skip = $position->group; $first =$first+1;?>
                        @endforeach
@endsection
