<title>Service - {{$service[0]->service_name}} | GIC</title>
@extends('layouts.main')
@section('container')
    <div class="g-max-width-800  text-center mx-auto g-pt-60">
        <h2 class="g-font-size-35--md h2 mb-3">{{$service[0]->service_name}}</h2>
    </div>
    <hr class="style-two g-width-400 ">
    <div class="container-fluid g-py-20 g-font-size-18 ">
        {!! $service[0]->detail_description!!}
    </div>
    @endsection