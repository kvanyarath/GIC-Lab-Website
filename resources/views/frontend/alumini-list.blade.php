<title>Alumni list  |  GIC</title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Alumni')])
    <div class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg1.svg);">
        <div class="container-fluid g-pt-100 g-pb-70">
            <!-- Heading -->
            <div class="g-max-width-645 text-center mx-auto g-mb-60">
                <h2 class="h1 mb-0">@lang('GIC\'s Students & Alumni')</h2>
            </div>
            <!-- Heading -->

            <!-- Programs Filter -->
            <div class="container-fluid">
                <div class="row justify-content-center  g-mb-30">
                    <!-- Campus -->
                    {{Form::open(array("url"=>"/alumni-list", 'files'=>true, 'method' => 'get'))}}
                    <select class=" custom-select form-control form-control-md form-control-lg js-custom-select g-width-300 text-center u-select-v1 u-shadow-v32 g-font-size-18 g-brd-white g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12 g-brd-primary--hover"
                            name='myfield' onchange='this.form.submit()'>
                        @if(isset($year))
                            <option class="disabled ">{{$year->label}}</option>
                        @else
                            <option class="disabled "><p>Select Years</p></option>
                        @endif

                        @foreach($dataYear as $ac)
                            @if(isset($year))
                                @if($year->id != $ac->id )
                                    <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                                            value="{{$ac->id}}">{{$ac->label}}</option>
                                @endif
                            @else
                                <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                                        value="{{$ac->id}}">{{$ac->label}}</option>
                            @endif
                        @endforeach
                    </select>
                    <noscript><input type="submit" value="Submit"></noscript>
                    </form>
                    <!-- End Campus -->

                </div>

            </div>
        </div>

        @if(isset($year))
        @foreach($dataYear as $data)
            <div class="container-fluid">
                {{--                <div class="row justify-content-between">--}}
                @foreach($dataAlumni as $delta)
                    @if($data->id == $delta->promotion_year_id)
                        <h2>{{$data->label}}</h2>
                        <div class="g-bg-white g-pt-0 g-bg-main btn btn-block g-mb-40"></div>
                        @break
                    @endif
                @endforeach
                {{--                    <a href=""><h2 class="">View All</h2></a>--}}

                {{--                    </div>--}}

                <div class="row g-lg-12 justify-content-lg-center  ">
                    @foreach($dataAlumni as $delta)
                        @if($data->id == $delta->promotion_year_id)
                            <div class=" u-block-hover g-pb-10 col-lg-2 col-md-2 col-sm-3 g-max-width-auto g-my-10 ">
                                <div class="g-overflow-hidden">
                                    <img class="img-fluid img-cover u-block-hover__main--zoom-v1 g-transition-0_5"
                                         @if(isset($delta->profile_photo))
                                         src="/storage/{{$delta->profile_photo}}"
                                         @else
                                         src="/storage/staffs/default/Blank-Person-400x500.jpg"
                                         @endif
                                         alt="Image Description" style="height: 200px;">
                                </div>
                                <div class="u-shadow-v32 g-bg-white g-pa-10">
                                    <h3 class="g-font-weight-500 mb-1 h6" style="overflow: hidden;">{{$delta->name}}</h3>
                                    {{--@if(strlen($data->year ) > 24)
                                        <span class="d-block g-color-text-light-v1 g-font-size-16"> {!! substr(strip_tags($data->year), 0, 24) !!}...</span>
                                    @else
                                        <span class="d-block g-color-text-light-v1 g-font-size-16">Graduated in <b>{{$data->year}}</b></span>
                                    @endif--}}
                                </div>
{{--                                <a class="u-link-v2" href="/gic-staff/{{$delta->id}}"></a>--}}
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach


    @if(count($dataAlumni) == 0)
        <div class="g-pb-140">
            <p class="text-center g-font-size-22" >
               Sorry There is NO information, We will update very soon
            </p>
        </div>
    @endif
    </div>
    @else
        <div class="g-pb-120"></div>
    @endif
@endsection