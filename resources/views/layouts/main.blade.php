<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>@isset($title) {{ $title }} | @endisset GIC</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:image" content="https://gic.itc.edu.kh/img/itc_logo.png">
    <meta property="og:image" content="https://gic.itc.edu.kh/img/logo.png">
    <meta property="og:title" content="Department of Information and Communication Engineering">
    @stack('meta')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/img/icon/favicon.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,400i,500,700%7CAlegreya:400" rel="stylesheet">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/icon-material/material-icons.css">
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/animate.css">
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/vendor/chosen/chosen.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/css/styles.multipage-education.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{!! url('/') !!}/unify/html/assets/css/custom.css">
    <link rel="stylesheet" href="{!! url('/') !!}/css/custom.css">

    @yield('style')
  </head>
  <body>
  	@section('sidebar')
  	<header id="js-header" class="u-header">
        <div class="u-header__section">
          <!-- Topbar -->
          <div class="g-bg-main">
            <div class="container-fluid top-container g-py-5">
              <!-- notice -->
              <!-- <div class="text-center g-color-white g-bg-red g-mb-10 g-font-size-16 g-py-5">
                  Note: This site is in development. All content are testing content only
              </div> -->
              <!-- end notice -->
              <ul class="list-inline d-flex align-items-center g-mb-0">
                <!-- Language -->
                <li class="list-inline-item ml-auto g-pos-rel ml-lg-auto">

                  <a id="language-dropdown-invoker" class=" d-sm-flex align-items-center u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-pl-0 g-pl-10--lg g-pr-10 g-py-15" href="#"
                     aria-controls="language-dropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-dropdown-event="hover"
                     data-dropdown-target="#language-dropdown"
                     data-dropdown-type="css-animation"
                     data-dropdown-duration="100"
                     data-dropdown-hide-on-scroll="true"
                     data-dropdown-animation-in="fadeIn"
                     data-dropdown-animation-out="fadeOut">
                    @if(App::getLocale()=="km")
                    <img src="{{asset('img/icon/khmer_flag_small.png')}}" alt="Khmer Language" width="18">
                    &nbsp; @lang('Khmer')
                    @else
                    <img src="{{asset('img/icon/english_flag_32.png')}}" alt="Khmer Language" width="18">
                    &nbsp; @lang('English')
                    @endif
                    <i class="g-ml-3 fa fa-angle-down"></i>
                  </a>

                  <ul id="language-dropdown" class="list-unstyled u-shadow-v39 g-brd-around g-brd-4 g-brd-white g-bg-secondary g-pos-abs g-left-0 g-z-index-99 g-mt-5"
                      aria-labelledby="language-dropdown-invoker">
                    <li class="dropdown-item g-px-0 g-py-2">
                      <a class="nav-link d-flex align-items-center g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default" href="/locale/km">
                        <img src="{{asset('img/icon/khmer_flag_small.png')}}" alt="Khmer Language" width="18">
                        &nbsp; @lang('Khmer')
                      </a>
                    </li>
                    <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
                      <a class="nav-link d-flex align-items-center g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default" href="/locale/en">
                       <img src="{{asset('img/icon/english_flag_32.png')}}" alt="Khmer Language" width="18">
                       &nbsp; @lang('English')
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Language -->

                <!-- Jump To -->
                <!-- <li class="list-inline-item g-pos-rel">
                  <a id="jump-to-dropdown-invoker" class="d-block d-lg-none u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-py-7" href="#"
                     aria-controls="jump-to-dropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-dropdown-event="hover"
                     data-dropdown-target="#jump-to-dropdown"
                     data-dropdown-type="css-animation"
                     data-dropdown-duration="0"
                     data-dropdown-hide-on-scroll="true"
                     data-dropdown-animation-in="fadeIn"
                     data-dropdown-animation-out="fadeOut">
                    @lang('Jump To')
                    <i class="g-ml-3 fa fa-angle-down"></i>
                  </a>
                  <ul id="jump-to-dropdown" class="list-unstyled u-shadow-v39 g-brd-around g-brd-4 g-brd-white g-bg-secondary g-pos-abs g-left-0 g-z-index-99 g-mt-13"
                      aria-labelledby="jump-to-dropdown-invoker">
                    <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
                      <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default" href="#research">@lang('Research')</a>
                    </li>
                    <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
                      <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default" href="#help">@lang('Help')</a>
                    </li>
                    <li class="dropdown-item g-brd-bottom g-brd-2 g-brd-white g-px-0 g-py-2">
                      <a class="nav-link g-color-main g-color-primary--hover g-bg-secondary-dark-v2--hover g-font-size-default" href="{{route('frontend.contactUs')}}">@lang('Contacts')</a>
                    </li>
                    <li class="dropdown-item g-px-0 g-py-2">
                      <a class="nav-link g-color-white g-bg-primary g-bg-primary-light-v1--hover g-font-size-default" href="{{route('login')}}">{{__('signin')}}</a>
                    </li>
                  </ul>
                </li> -->
                <!-- End Jump To -->

                <!-- Links -->
                @foreach($topmenus as $menu)
                    <li class="list-inline-item d-lg-inline-block">
                    <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-px-10 g-py-15" href="{{route($menu['url_name'])}}"> @if(isset($menu['icon'])) <i class="{{$menu['icon']}} fa-fw"></i> @endif {{ $menu['label']}}</a>
                    </li>
                @endforeach
                @auth
                    <li class="list-inline-item d-none d-lg-inline-block">
                    <a class="u-link-v5 g-color-white-opacity-0_7 g-color-white--hover g-font-size-12 text-uppercase g-px-10 g-py-15" href="/admin">@lang('Dashboard!')</a>
                    </li>
                    <li class="list-inline-item d-none d-lg-inline-block">
                    <a class="u-link-v5 u-shadow-v19 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-12 text-uppercase g-rounded-20 g-px-18 g-py-8 g-ml-10" href="{{route('frontend.logout')}}">{{__('signout')}}</a>
                    </li>
                @endauth
                @guest
                <!-- <li class="list-inline-item d-none d-lg-inline-block">
                  <a class="u-link-v5 u-shadow-v19 g-color-white--hover g-bg-white g-bg-primary--hover g-font-size-12 text-uppercase g-rounded-20 g-px-18 g-py-8 g-ml-10" href="{{route('login')}}">{{__('signin')}}</a>
                </li> -->
                @endguest
                <!-- End Links -->

                <!-- Search -->
                <!-- <li class="list-inline-item g-ml-15--lg ml-auto">
                  <form id="searchform-1" class="input-group u-shadow-v19 g-brd-primary--focus g-rounded-20">
                    <input class="form-control g-brd-none g-bg-white g-font-size-12 text-uppercase g-rounded-left-20 g-pl-20 g-py-9" type="text" placeholder="@lang('Search here ...')">
                    <button class="btn input-group-addon d-flex align-items-center g-brd-none g-color-white g-bg-primary g-bg-primary-light-v1--hover g-font-size-13 g-rounded-right-20 g-transition-0_2" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                  </form>
                </li> -->
                <!-- End Search -->
              </ul>
            </div>
          </div>
          <!-- End Topbar -->

          <div class="container-fluid top-container">
                @include('layouts.partials.menu')
          </div>
        </div>
    </header>
    @show
      <!-- End Header -->
  	@yield('container')
    @include('frontend.elements.gotop')
    @include('layouts.partials.footer')

  	<script src="{!! url('/') !!}/unify/html/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/vendor/popper.js/popper.min.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="{!! url('/') !!}/unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script src="{!! url('/') !!}/unify/html/assets/js/hs.core.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/js/components/hs.header.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/js/helpers/hs.hamburgers.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/js/components/hs.dropdown.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/js/helpers/hs.height-calc.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/js/components/hs.carousel.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/js/components/hs.popup.js"></script>
    <script src="{!! url('/') !!}/unify/html/assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="{!! url('/') !!}/unify/html/assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

        // initialization of header's height equal offset
        $.HSCore.helpers.HSHeightCalc.init();

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

      });
    </script>

    @yield('script')
  </body>
</html>
