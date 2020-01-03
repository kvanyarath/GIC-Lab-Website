@extends('layouts.main')

@section('style')
@endsection

@section('container')

{{--@include('frontend.academic.partials.program-filter')--}}

<!-- Programs -->
<div class="container-fluid g-pt-70">
    <div class="row">
        <div class="col-lg-8 g-mb-70">
            <div class="mb-5">
                <h2 class="g-mb-20">Program List and Descriptions</h2>
                <p>
                Currently GIC runs one Engineer program (<a href="/degree/1/text_detail">program Information and Communication Engineering</a>)
                and one Master program (<a href="/degree/2/text_detail">Master of Mobile Technology</a>). 
                Explore more about curriculum, entrance selection and how to be ready for each program by visiting page of each program. 
                The timetable for each program is available <a href="/timetable">here</a>.
                </p>
            </div>

            {{--<div class="g-px-15 mb-5">
                <!-- Heading -->
                <div class="row g-bg-main g-color-white g-font-size-16 g-py-15">
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <h2 class="h5 mb-0"><a class="u-link-v5 g-color-white-opacity-0_8 g-color-white--hover"
                                    href="#">
                                    <!-- <i class="g-font-size-20 material-icons">swap_vert</i> -->
                                    @lang('field_study')
                                </a></h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <h3 class="h5 mb-0"><a class="u-link-v5 g-color-white-opacity-0_8 g-color-white--hover"
                                    href="#">
                                    <!-- <i class="g-font-size-20 material-icons">swap_vert</i> -->
                                    @lang('program_year')
                                </a></h3>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="d-flex align-items-center">
                            <h3 class="h5 mb-0"><a class="u-link-v5 g-color-white-opacity-0_8 g-color-white--hover"
                                    href="#">
                                    <!-- <i class="g-font-size-20 material-icons">swap_vert</i> -->
                                    @lang('degree')
                                </a></h3>
                        </div>
                    </div>
                </div>
                <!-- End Heading -->
                @foreach($field_studies as $f)
                <div class="row g-brd-around g-brd-top-none g-brd-secondary-light-v2 g-font-size-16 g-py-15">
                    <div class="col-sm-4">
                        <span>{{$f->title}}</span>
                    </div>
                    <div class="col-sm-6">
                        <a href="/academic?degree={{$f->degree->id}}">{{$f->degree->degree}}</a>
                    </div>
                    <div class="col-sm-2">
                        <span>@foreach($f->programYears as $p) {{$p->program_year. ' '}} @endforeach</span>
                    </div>
                </div>
                @endforeach
            </div>--}}

            <!-- Pagination -->
            <!-- <nav aria-label="Page Navigation">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-secondary-light-v2 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded g-pa-5"
                            href="#">1</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-text-light-v1 g-color-primary--hover g-font-size-12 rounded g-pa-5"
                            href="#">2</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-text-light-v1 g-color-primary--hover g-font-size-12 rounded g-pa-5"
                            href="#">3</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-secondary-light-v2 g-brd-primary--hover g-color-text-light-v1 g-color-primary--hover g-font-size-12 rounded g-pa-5 g-ml-15"
                            href="#" aria-label="Next">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-right"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                    <li class="list-inline-item float-right">
                        <span class="u-pagination-v1__item-info g-color-gray-dark-v4 g-font-size-12 g-pa-5">Page 1 of
                            3</span>
                    </li>
                </ul>
            </nav> -->
            <!-- End Pagination -->
        </div>

        <div class="col-lg-3 g-mb-70">
            <h3 class="h4">Related Links</h3>
            <div id="stickyblock-start">
                <div class="js-sticky-block g-sticky-block--lg pt-4" data-responsive="true"
                    data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">
                    <!-- Sidebar Links -->
                    <ul class="list-unstyled g-mb-50">
                        <li class="mb-1">
                            <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                                href="/timetable">
                                <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                                @lang('Timetable')
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7"
                                href="/calendar">
                                <i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>
                                @lang('Academic Calendar')
                            </a>
                        </li>
                    </ul>
                    <!-- End Sidebar Links -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Programs -->


@endsection

@section('script')
<script src="/unify/html/assets/vendor/chosen/chosen.jquery.js"></script>
<script src="/unify/html/assets/js/components/hs.select.js"></script>
<script>
    $(function() {
        $.HSCore.components.HSSelect.init('.js-custom-select');
        
    })
</script>

@endsection