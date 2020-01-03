<title>Students' Products List | GIC</title>
@extends('layouts.main')
@section('container')
    <div class="container-fluid">
    <h1 class="text-center g-pt-50 g-pb-20">@lang('Student\'s Notable Works')</h1>

    <div class="row justify-content-center g-pb-0">
        {{Form::open(array("url"=>"/student-project", 'files'=>true, 'method' => 'get'))}}
        <select class=" custom-select form-control form-control-md form-control-lg js-custom-select g-width-300 text-center u-select-v1 u-shadow-v32 g-font-size-18 g-brd-white g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12 g-brd-primary--hover"
                name='myfield' onchange='this.form.submit()'>
            @if(isset($myfield))
                <option class="disabled ">{{$myfield}}</option>
            @else
                <option class="disabled "><p>@lang('Select Academic Years')</p></option>
            @endif
            @foreach($academic_year as $ac)
                @if(isset($myfield))
                    @if($myfield != $ac->name )
                        <option class="g-brd-secondary-light-v2 g-color-main  u-shadow-v41 g-color-white--active g-bg-primary--active"
                                value="{{$ac->name}}">{{$ac->name}}</option>
                    @endif
                @else
                    <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="{{$ac->name}}">{{$ac->name}}</option>
                @endif
            @endforeach
        </select>
        @if(isset($type))
            <input type="hidden" value="{{$type}}" name="type">
        @endif
        <noscript>
            <input type="submit" value="Submit">
        </noscript>
        </form>

        {{Form::open(array("url"=>"/student-project", 'files'=>true, 'method' => 'get'))}}
        <select class=" custom-select form-control g-ml-20 form-control-md form-control-lg js-custom-select g-width-300 text-center u-select-v1 u-shadow-v32 g-font-size-18 g-brd-white g-color-main g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-25 g-py-12 g-brd-primary--hover"
                name='type' onchange='this.form.submit()'>
            @if(isset($type))
                <option class="disabled ">{{$type}}</option>
            @else
                <option class="disabled "><p>@lang('Select Project Type')</p></option>
            @endif
            @foreach($project_types as $p)
                @if(isset($type))
                    @if($type != $p->type )
                        <option class="g-brd-secondary-light-v2 g-color-main  u-shadow-v41 g-color-white--active g-bg-primary--active"
                                value="{{$p->type}}">{{$p->type}}</option>
                    @endif
                @else
                    <option class="g-brd-secondary-light-v2 g-color-main g-color-white--active g-bg-primary--active"
                            value="{{$p->type}}">{{$p->type}}</option>
                @endif
            @endforeach
        </select>
        @if(isset($myfield))
            <input type="hidden" value="{{$myfield}}" name="myfield">
        @endif
        <noscript>

            <input type="submit" value="Submit1">

        </noscript>
        </form>
    </div>
    </div>
<div class="row justify-content-center g-mb-50">
        @if(isset($myfield) || isset($type))
            <div class="g-ml-10 g-width-220   text-center u-select-v1 u-shadow-v41  g-color-main  g-bg-white g-rounded-30 g-px-10  g-pb-0  g-brd-primary--hover" >
                <a href="/student-project" style="text-decoration: none">
                    <p class="g-font-size-18 g-pt-3  g-pb-0 g-color-main   ">@lang('List all Works')</p>
                </a>
            </div>
        @endif
</div>
    <div class="container-fluid g-mb-150">
        @if($projects->total() == 0)
        <div class="text-center ">
        <h4 class=" btn btn-danger g-width-600">@lang('No information to be display at the moment, we will upload it soon')</h4>
        </div>

    @endif
    @foreach($projects as $project)
        @if($loop->index % 2 == 0)
            <!-- Gallery -->
                <section class="container-fluid g-px-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-md-6 order-md-2">
                            <div class="text-center g-pa-15x">
                                <div class="mb-5">
                                    <h3 class="h1 g-color-black mb-4">{{$project->project_title}}</h3>
                                    <p class="g-color-gray-dark-v4 g-font-size-16">{{$project->short_description}}</p>
                                </div>
                                <a class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13"
                                   href="/student-project/{{$project->id}}">@lang('see_more')
                                    <i class="ml-2 fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-6 order-md-1">
                            <div class="g-flex-centered g-min-height-600 g-bg-secondary text-center">
                                <div class="u-shadow-v19 g-bg-white g-pa-25">
                                    <img class="img-project img-fluid u-shadow-v21"
                                         src="/storage/{{$project->project_cover}}" alt="GIC Project Thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Gallery -->
        @endif
        @if($loop->index % 2 != 0)
            <!-- Gallery -->
                <section class="container-fluid g-px-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-md-6">
                            <div class="text-center g-pa-15x">
                                <div class="mb-5">
                                    <h3 class="h1 g-color-black mb-4">{{$project->project_title}}</h3>
                                    <p class="g-color-gray-dark-v4 g-font-size-16">{{$project->short_description}}</p>
                                </div>
                                <a class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13"
                                   href="/student-project/{{$project->id}}">@lang('see_more')
                                    <i class="ml-2 fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="g-flex-centered g-min-height-600 g-bg-secondary text-center">
                                <div class="u-shadow-v19 g-bg-white g-pa-25">
                                    <img class="img-project img-fluid u-shadow-v21"
                                         src="/storage/{{$project->project_cover}}" alt="GIC Project thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Gallery -->
            @endif
        @endforeach
{{--    pagination--}}
        <div class="g-mt-30">
            <div class="float-right">
                @if(isset($myfield) && !isset($type))
                    {{ $projects->appends(['myfield' => $myfield ])->links()}}
                    @elseif(isset($type) && !isset($myfield))
                    {{ $projects->appends(['type' => $type ])->links()}}
                    @elseif(isset($type) && isset($myfield))
                    {{ $projects->appends(['myfield' => $myfield,'type'=> $type ])->links()}}
                @else
                    {{ $projects->links() }}
                @endif
            </div>
        </div>
{{--        end pagination--}}
    </div></div>
@endsection
