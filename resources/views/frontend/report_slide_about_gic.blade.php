<title>GIC's Reports/Presentations | GIC</title>
@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __("GIC's Report")])

    <div class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg1.svg);">
        <!-- Heading -->
        <div class="g-max-width-645 text-center mx-auto g-pt-60 g-mb-60">
            <h2 class="h1 mb-3">GIC's Reports/Presentations</h2>
            <p class="g-font-size-18">You can understand us better by checking our reports and presentation slides.</p>
        </div>
        <!-- Heading -->
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="embed-responsive embed-responsive-16by9 u-shadow-v36 g-brd-around g-brd-7 g-brd-white g-rounded-5 mb-4">
                    <iframe src="https://www.youtube.com/embed/WkctD4PZWyE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        </div>

        {{--        Table--}}
        @if($slides && count($slides))
        <div class="container-fluid">
            <table class="table table-hover">
                <thead>
                <tr class="">
                    <th scope="col" class="col-lg-2 g-pl-50 ">Title</th>
                    <th scope="col" class="col-lg-9 text-center g-pr-30"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($slides as $slide)
                    <?php $file = (json_decode($slide->file_location))[0]->download_link;
                    $name = (json_decode($slide->file_location))[0]->original_name;
                    ?>
                    <tr>
                        <td  class="g-pl-50"><?php if(\App::getLocale() == 'km') {echo $slide->title_kh;} else{echo $slide->title_en;}?></td>
                        <td><a class="text-decoration-none g-color-indigo g-color-google-plus--hover" role="button" href="storage/{{$file}}"
                               download="{{$name}}">
                                Download
                            </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{--        End-Table--}}
        </div>
        @endif
        <div class="float-right g-pt-20">
        {{ $slides->links() }}
        </div>
        <br>
        <br>
        <br>
    </div>
@endsection
