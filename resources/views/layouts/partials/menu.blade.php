 <!-- Nav -->
 <nav class="js-mega-menu navbar navbar-expand-lg g-px-0 g-py-5 g-py-0--lg">
    <!-- Logo -->

    <div class="logo_text">
        <div class="d-flex g-width-170 g-width-auto--md">
           <a class="navbar-brand g-max-width-170 g-max-width-200--lg" href="http://itc.edu.kh" target="_blank">
                <img class="img-fluid g-hidden-lg-down" src="{{asset('img/itc_logo.png') }}" alt="Logo" style="height:80px;">
                <img class="img-fluid g-width-80 g-hidden-md-down g-hidden-xl-up" src="{{asset('img/itc_logo.png') }}" alt="Logo">
                <img class="img-fluid g-hidden-lg-up" src="{{asset('img/itc_logo.png') }}" alt="Logo">
            </a>
            <div class="g-bg-main g-my-10 g-mr-20 g-brd-around"></div>
            <a class="navbar-brand g-max-width-170 g-max-width-200--lg" href="https://gic.itc.edu.kh/" target="_blank">
                <img class="img-fluid g-hidden-lg-down" src="{{asset('img/logo.png') }}" alt="Logo" style="height:70px; margin-top: 5px;">
                <img class="img-fluid g-height-70 g-mt-5 g-hidden-md-down g-hidden-xl-up" src="{{asset('img/logo.png') }}" alt="Logo">
                <img class="img-fluid g-mt-8 g-hidden-lg-up" src="{{asset('img/logo.png') }}" alt="Logo">
            </a>
            <div class="g-bg-main g-my-10 g-mr-20 g-brd-around"></div>
            <a class="navbar-brand g-max-width-170 g-max-width-200--lg" href="{{route('frontend.homepage')}}">
                <img class="img-fluid g-hidden-lg-down" src="{{asset('img/nlp.png') }}" alt="NLP" style="height:70px; margin-top: 5px;">
                <img class="img-fluid g-height-70 g-mt-5 g-hidden-md-down g-hidden-xl-up" src="{{asset('img/nlp.png') }}" alt="NLP">
                <img class="img-fluid g-mt-8 g-hidden-lg-up" src="{{asset('img/nlp.png') }}" alt="NLP">
            </a>
        </div>
        <div class="logo_text_bottom text-left g-font-size-10 g-font-size-16--md">
            Département de Génie Informatique et Communication
        </div>
        <div class="logo_text_top text-left g-font-size-10 g-font-size-16--md">
            Department of Information and Communication Engineering
        </div>


    </div>

    <!-- End Logo -->

    <!-- Responsive Toggle Button -->
    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0" type="button"
            aria-label="Toggle navigation"
            aria-expanded="false"
            aria-controls="navBar"
            data-toggle="collapse"
            data-target="#navBar">
        <span class="hamburger hamburger--slider g-px-0">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
        </span>
    </button>
    <!-- End Responsive Toggle Button -->

    <!-- Navigation -->
    <div id="navBar" class="collapse navbar-collapse">
        <ul class="navbar-nav align-items-lg-center g-py-30 g-py-0--lg ml-auto" >

        {{-- @include('layouts.partials.megaMenu') --}}

        {{--THIS MENU SHARE FROM AppServiceProvider --}}
            @foreach($menus as $menu)
                    @if(isset($menu['submenu']))
                        <li class="hs-has-sub-menu nav-item g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                            <a class="nav-link g-py-7 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages"> {{__($menu['label'])}}</a>
                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling animated fadeOut" aria-labelledby="nav-link-pages">
                                @component('layouts.partials.submenu',['title' => "bar", 'submenu' => $menu['submenu']])
                                @endcomponent
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="{{Route::currentRouteName() == $menu['url_name'] ?'menu-active':''}} nav-link menu--hover g-font-size-15 g-font-size-17--xl g-py-10 g-py-30--lg" href="{{route($menu['url_name'])}}">
                                <span class="g-py-7">{{__($menu['label'])}}</span>
                            </a>
                        </li>
                    @endif
            @endforeach
        </ul>
    </div>
    <!-- End Navigation -->
</nav>
<!-- End Nav -->
