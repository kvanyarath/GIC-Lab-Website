<!-- <div class="">
    <section class="g-bg-secondary g-py-20">
        <div class="container-fluid">
            <div class="d-sm-flex text-center">
                <div class="align-self-center mr-auto">
                    <ul class="u-list-inline">
                        <li class="list-inline-item g-mr-5">
                            <a class="u-link-v5 g-color-main" href="/">@lang('home')</a>
                            <i class="g-color-gray-light-v2 g-ml-5">/</i>
                        </li>
                        @isset($pages)
                        @foreach($pages as $page)
                        <li class="list-inline-item g-mr-5">
                            <a class="u-link-v5 g-color-main" href="{{$page['url']}}">{{$page['title']}}</a>
                            <i class="g-color-gray-light-v2 g-ml-5">/</i>
                        </li>
                        @endforeach
                        @endisset
                        <li class="list-inline-item g-color-primary">
                            <span>
                            @isset($current)
                            {{$current}}
                            @else
                            {{$title}}
                            @endisset
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div> -->
