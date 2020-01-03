<title>Timetable | GIC </title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Timetable')])
    @foreach($timetable as $t)
    @endforeach
    <div class="col-lg-12  g-pr-0 g-my-60 justify-content-between row">
        <div class="col-lg-2 g-mt-75 border-right g-height-100vh">
            <p class="font-weight-bold text-center">Please Select Yours</p>
            @foreach($year as $y)
                <li class="mb-1 list-unstyled g-my-10">
                    {{Form::open(array("url"=>"/timetable", 'files'=>true, 'method' => 'get'))}}
                    @if(isset($myfield))
                        @if($y == $myfield)
                            <button
                                class="d-block btn w-100 g-pl-5 u-link-v5 g-color-text g-color-white g-bg-main g-font-size-default rounded g-pl-20--hover g-px-50 g-py-7"
                                value="{{$y}}" disabled name="myfield">
                                <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                                {{$y}}
                            </button>

                        @else
                            <button
                                class="d-block btn w-100 g-pl-5 u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-20--hover g-px-50 g-py-7"
                                value="{{$y}}" name="myfield">
                                <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                                {{$y}}
                            </button>
                        @endif
                    @else
                        @if($y == 'Year 3')
                            <button
                                class="d-block btn w-100 g-pl-5 u-link-v5 g-color-text g-color-white g-bg-main g-font-size-default rounded g-pl-20--hover g-px-50 g-py-7"
                                value="{{$y}}" disabled name="myfield">
                                <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                                {{$y}}
                            </button>

                        @else
                            <button
                                class="d-block btn w-100 g-pl-5 u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-20--hover g-px-50 g-py-7"
                                value="{{$y}}" name="myfield">
                                <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                                {{$y}}
                            </button>
                        @endif
                    @endif
                    <noscript><input type="submit" value="Submit"></noscript>
                    </form>
                    @if(isset($myfield))
                        @if($y == $myfield)
                            {{Form::open(array("url"=>"/timetable", 'files'=>true, 'method' => 'get','id'=>'theForm'))}}
                            <div class="w-100 justify-content-between g-pt-10 row show">
                                <div class="radio g-ml-30 ">
                                    <label><input type="radio" onChange="autoSubmit()"
                                                  @if($semester == 'Semester 1') checked @endif name="semester"
                                                  value="Semester 1">&nbsp;Semester 1</label>
                                </div>
                                <div class="radio g-ml-30 g-mr-5 ">
                                    <label><input type="radio" name="semester" @if($semester == 'Semester 2') checked
                                                  @endif onChange="autoSubmit()"
                                                  value="Semester 2">&nbsp;Semester 2</label>
                                </div>
                            </div>

                            <input type="hidden" value="{{$myfield}}" name="myfield">
                        @endif
                    @else
                        @if($y =='Year 3')
                            {{Form::open(array("url"=>"/timetable", 'files'=>true, 'method' => 'get','id'=>'theForm'))}}
                            <div class="w-100 justify-content-between g-pt-10 row show">
                                <div class="radio g-ml-30 ">
                                    <label><input type="radio" checked onChange="autoSubmit()" name="semester"
                                                  value="Semester 1">&nbsp;Semester 1</label>
                                </div>
                                <div class="radio g-mr-5 ">
                                    <label><input type="radio" name="semester" onChange="autoSubmit()"
                                                  value="Semester 2">&nbsp;Semester 2</label>
                                </div>
                            </div>
                            <input type="hidden" value="Year 3" name="myfield">
                        @endif
                    @endif
                </li>
            @endforeach
            <noscript><input type="submit" value="Submit"></noscript>
            </form>
        </div>
        <div class="col-lg-10 h-100 float-right g-px-0  g-px-15">
            <h1 class=" text-center g-pb-30 g-pr-140">
                {{$timetable->year}} Timetable<span
                    class="g-font-size-20 g-color-black-opacity-0_6"> &nbsp(@if(isset($semester)){{$semester}})@else
                        Semester 1 )@endif</span>
            </h1>

                <div class="w-100 h-100">
                    <iframe class=" w-100"
                            src="{{Storage::url($file)}}#zoom=100"
                            type="application/type"
                            style="border: 0 ;overflow:hidden;position:relative;height: 800;width: 100%">
                    </iframe>
                </div>
            </div>

    </div>


@endsection
<script>
    function autoSubmit() {
        var formObject = document.forms['theForm'];
        formObject.submit();
    }
</script>
