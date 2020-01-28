<div class="container-fluid">
    <h1 class="text-center">Messages from alumni and students</h1>
</div>

<div class="g-bg-main-light-v2" style="background-color: #203e61;">
    <div class="container-fluid g-pt-70 g-pb-20" style="position: relative;">
        <div class="js-carousel" data-pagi-classes="u-carousel-indicators-v35--white g-pos-rel text-center">
        @foreach($student_messages as $m)
        <!-- Testimonials -->
        <div class="js-slide">
            <div class="row justify-content-lg-center g-mb-20">
            <div class="col-md-3 col-lg-2 g-mb-20">
                <img class="img-fluid u-shadow-v36 rounded-circle mx-auto" src="{{Storage::url($m->photo_url)}}" alt="Photo">
            </div>

            <div class="col-md-9 col-lg-8 g-mb-20">
                <!-- Testimonials - Content -->
                <div class="media mb-3">
                <div class="d-flex mr-3">
                    <span class="g-color-white-opacity-0_8 g-font-secondary g-font-size-40 g-opacity-0_3 g-pos-rel g-top-minus-10">&#8220;</span>
                </div>
                <div class="media-body">
                    <blockquote class="g-brd-left-none g-color-white g-font-style-italic g-font-size-20 g-pl-0">
                    {{$m->content}}
                    <span class="align-self-end g-color-white-opacity-0_8 g-font-secondary g-font-size-40 g-opacity-0_3 g-line-height-0 align-bottom g-pos-rel g-top-minus-10">&#8221;</span>
                    </blockquote>
                </div>
                </div>

                <div class="g-pl-30">
                <h3 class="h4 g-color-primary g-font-weight-700 mb-0">{{$m->name}}</h3>
                <span class="d-block g-font-size-18 g-color-white-opacity-0_5 g-pl-20">&#8212; {{$m->position}}</span>
                </div>
                <!-- End Testimonials - Content -->
            </div>
            </div>
        </div>
        <!-- End Testimonials -->
        @endforeach
        </div>
        @if (count($student_messages) > 4)
            <div style="position: absolute; right: 20px; bottom: 20px;">
                <a href="/studentMessage" class="btn btn-primary btn-xs"><i class="fa fa-eye fa-fw"></i> See More</a>
            </div>
        @endif
    </div>
</div>
