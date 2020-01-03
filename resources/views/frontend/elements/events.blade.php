<div class="g-bg-secondary">
    <div class="container-fluid g-py-30">
        <!-- Heading -->
        <div class="g-max-width-645 text-center g-mb-60 mx-auto">
            <h2 class="h1 mb-3">Events/Talks</h2>
            <blockquote class="blockquote blockquote-reverse g-mb-30">
            <p class="m-b-0 section-content">In today's environment, hoarding knowledge ultimately erodes your power. If you know something very important, the way to get power is by actually sharing it.</p>
            <footer class="blockquote-footer">Joseph Badaracco
            </footer>
            </blockquote>
        </div>
        <!-- End Heading -->

        <!-- More Events List -->
        <ul class="list-unstyled g-mb-30">
            @foreach($events as $event)
            <!-- Events Item -->
            <li
                class="u-block-hover u-shadow-v37--hover g-bg-secondary-dark-v1 g-bg-white--hover rounded g-px-50 g-py-30 mb-4">
                <div class="row align-items-lg-center">
                    <div class="col-12 g-hidden-md-up" style="height:5px;">
                        <hr class="g-bg-primary g-mt-0">
                    </div>
                    <div class="col-md-3 col-lg-2 g-mb-30 g-mb-0--lg">
                        @if($event->start_date)
                        <div class="d-flex align-items-center mb-3">
                            <span
                                class="g-color-primary g-font-weight-500 g-font-size-50 g-line-height-1 mr-3">{{$event->start_date->format('d')}}</span>
                            <div class="g-color-text-light-v1 text-center g-line-height-1_4">
                                <span class="d-block">{{$event->start_date->format('M')}}</span>
                                <span class="d-block">{{$event->start_date->format('Y')}}</span>
                            </div>
                        </div>
                        <span class="d-block g-color-text-light-v1">{{$event->start_date->format('d M')}} - {{$event->end_date->format('d M')}}</span>
                        @endif
                    </div>
                    <div class="col-md-9 col-lg-8 g-mb-30 g-mb-0--lg">
                        <h3 class="h5 g-font-primary g-font-weight-500 mb-1">{{$event->name}}</h3>
                        <!-- <p>Professor Allan Pack, University of Pennsylvania</p>
                        <a class="d-inline-block u-link-v5 g-color-text-light-v1 g-color-primary--hover" href="#">
                            <i class="align-middle g-color-primary mr-2 icon-real-estate-027 u-line-icon-pro"></i>
                            Unify Perkins Lecture Hall
                        </a> -->
                    </div>
                    <!-- <div class="col-lg-2">
                        <a class="btn btn-block g-brd-2 g-brd-main-opacity-0_1 g-brd-primary--hover g-color-primary g-color-white--hover g-bg-primary--hover g-rounded-30 g-py-10"
                            href="#">Register now</a>
                    </div> -->
                </div>
                <a target="_blank" class="u-link-v2" href="/events/{{$event->id}}"></a>
            </li>
            <!-- End Events Item -->
            @endforeach
        </ul>
        <!-- End More Events List -->

        <div class="text-center">
            <a target="_blank" class="btn u-shadow-v33 g-color-white g-color-white--hover g-bg-primary g-bg-main--hover g-rounded-30 g-px-25 g-py-10"
                href="/events"><i class="fa fa-eye fa-fw"></i> View all Events</a>
        </div>
    </div>
</div>
<!-- End Events -->
