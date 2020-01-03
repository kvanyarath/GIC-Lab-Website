<div class="container-fluid g-pt-30 g-pb-30">
<!-- Heading -->
<div class="g-max-width-645 text-center mx-auto g-mb-30">
    <h2 class="h1 mb-3">@lang('projects')</h2>
</div>
<!-- End Heading -->
@if(!empty($projects) && isset($projects[0]))
<!-- Gallery -->
<section class="container-fluid g-px-0">
    <div class="row align-items-center no-gutters">
        <div class="col-md-6 order-md-2">
            <div class="text-center g-pa-15x">
                <div class="mb-5">
                    <h3 class="h1 g-color-black mb-4">{{$projects[0]->title}}</h3>
                    <p class="g-color-gray-dark-v4 g-font-size-16">{{$projects[0]->short_description}}</p>
                </div>
                <a target="_blank"  class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13" href="/gic-projects/{{$projects[0]->id}}">@lang('see_more')
                    <i class="ml-2 fa fa-long-arrow-right"></i></a>
            </div>
        </div>

        <div class="col-md-6 order-md-1">
            <div class="g-flex-centered g-min-height-400 g-bg-secondary text-center">
                <div class="u-shadow-v19 g-bg-white g-pa-25">
                    <img class="img-project img-fluid u-shadow-v21" src="{{$projects[0]->image}}"
                        alt="GIC Project Thumbnail">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Gallery -->
@endif
@if(!empty($projects) && isset($projects[1]))
<!-- Gallery -->
<section class="container-fluid g-px-0">
    <div class="row align-items-center no-gutters">
        <div class="col-md-6">
            <div class="text-center g-pa-15x">
                <div class="mb-5">
                    <h3 class="h1 g-color-black mb-4">{{$projects[1]->title}}</h3>
                    <p class="g-color-gray-dark-v4 g-font-size-16">{{$projects[1]->short_description}}</p>
                </div>
                <a target="_blank"  class="btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13" href="/gic-projects/{{$projects[1]->id}}">@lang('see_more')
                    <i class="ml-2 fa fa-long-arrow-right"></i></a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="g-flex-centered g-min-height-400 g-bg-secondary text-center">
                <div class="u-shadow-v19 g-bg-white g-pa-25">
                    <img class="img-project img-fluid u-shadow-v21" src="{{$projects[1]->image}}"
                        alt="GIC Project thumbnail">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Gallery -->
@endif
</div>
