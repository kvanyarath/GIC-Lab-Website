<title>{{$data->project_title}} | GIC</title>
@extends('layouts.main')
@section('container')

    <div class="container-fluid">
    <div class="g-pt-50 g-pb-20 row justify-content-center">
        <h1>{{$data->project_title}}</h1>
    </div>
<div class="row justify-content-center">
    <div class="g-px-20"><p class="">Type: <span class="g-color-darkpurple">{{$data->type}}</span></p></div>
    <div class="g-px-20"><p class="">Academic year: <span class="g-color-darkpurple">{{$data->academic_year}}</span></p></div>

</div>
    </div>


    <div class="container-fluid g-pt-50">

    <p>{!! $data->long_description !!}</p>
    </div>


@endsection