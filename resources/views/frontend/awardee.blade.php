@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Scholarships')])
    <div class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg1.svg);">
        <div class="container-fluid g-pt-100 g-pb-70">
            <!-- Heading -->
            <div class="g-max-width-645 text-center mx-auto g-mb-60">
                <h2 class="h1 mb-0">@lang("Browse all of GIC's Awards")</h2>
            </div>
            <!-- Heading -->

            <!-- Programs Filter -->
            <div class="container-fluid">
                <div class="row justify-content-center ">
                    <!-- Campus -->
                    {{Form::open(array("url"=>"/awardee", 'files'=>true, 'method' => 'get'))}}
                    <select class=" custom-select form-control form-control-md form-control-lg js-custom-select g-width-300 text-center u-select-v1 u-shadow-v32 g-font-size-18 g-brd-white g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12 g-brd-primary--hover"
                            name='myfield' onchange='this.form.submit()'>
                        @if(isset($myfield))
                            <option class="disabled ">{{$year->name}}</option>
                        @else
                            <option class="disabled "><p>@lang("Select Years")</p></option>
                        @endif
                        @foreach($academic_year as $ac)
                            @if(isset($myfield))
                                @if($year->id != $ac->id )
                                    <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                                            value="{{$ac->id}}">{{$ac->name}}</option>
                                @endif
                            @else
                                <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                                        value="{{$ac->id}}">{{$ac->name}}</option>
                            @endif
                        @endforeach
                    </select>
                    <noscript><input type="submit" value="Submit"></noscript>
                    </form>
                    <!-- End Campus -->

                    @if(isset($myfield))
                        <div class="g-ml-10 g-width-200 text-center u-select-v1 u-shadow-v41  g-color-main  g-bg-white g-rounded-30 g-px-10  g-pb-0  g-brd-primary--hover">
                            <a href="/awardee" style="text-decoration: none">
                                <p class="g-font-size-18 g-pt-3  g-color-main   ">@lang('List all Awards')</p>
                            </a>
                        </div>
                    @endif
                </div>

            </div>
        </div>

        <!-- End Programs Filter -->
        <div class="row g-mx-50 justify-content-center g-lg-12  ">
            @foreach($datas as $data)

                <div class="row g-mx-20 g-lg-12 shadow-lg p-1 g-mt-50">
                    <div class="g-lg-6 g-pl-10 g-py-10 " style="background-color: #F9F9F9">
                        <a href="/awardee/{{$data->id}}">
                            <img style="object-fit: cover;" class="g-width-270 g-height-220"
                                 src="/storage/{{$data->profile_photo}}"
                                 alt="">
                        </a>
                    </div>
                    <div class="g-lg-6 g-width-270 g-pl-20 g-pt-30 " style="background-color: #F9F9F9">
                        <h3 class="text-center g-pr-20">{{$data->full_name}}</h3>
                        <p> {!! substr(strip_tags($data->text_description), 0, 145) !!}...
                            <a class="btn g-font-weight-600 u-btn-outline-primary  g-pt-0 g-pb-5 g-rounded-10 g-px-10 "
                               href="/awardee/{{$data->id}}">@lang('Read more')
                            </a>
                        </p>
                    </div>
                </div>

            @endforeach
        </div>
        <br><br>
        <div class="float-right">
            @if(isset($myfield))
                {{ $datas->appends(['myfield' => $myfield ])->links()}}
            @else
                {{ $datas->links() }}
            @endif
        </div>
        <br><br><br>
    </div>
@endsection
