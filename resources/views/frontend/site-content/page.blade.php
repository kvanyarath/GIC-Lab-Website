@extends('layouts.main')

@section('container')
@include('frontend.partials.breadcrumb', ['title' => __($data->developer_name)])
@include('frontend.partials.title', ['title' => __($data->developer_name)])

<div class="container-fluid g-mt-50 g-mb-50">
    {!! $data->html_text !!}
</div>

@endsection
