@foreach($submenu as $menu)
    @if (isset($menu['submenu']))
        <li class="dropdown-item hs-has-sub-menu" data-animation-in="fadeIn" data-animation-out="fadeOut">
            <a class="nav-link g-py-7 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages"> {{__($menu['label'])}}</a>
            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2 animated" aria-labelledby="nav-link-pages">
                @component('layouts.partials.submenu',['title' => "bar", 'submenu' => $menu['submenu']])
                @endcomponent
            </ul>
        </li>
    @else
        <li class="dropdown-item">
            @php 
                if (!isset( $menu['url'] ) ) {
                    $menu['url'] = '#';
                }
            @endphp
            <a class="nav-link g-px-0" href="{{Route::has($menu['url_name']) ? route($menu['url_name']) : $menu['url']}}">{{__($menu['label'])}}</a>
        </li>
    @endif
@endforeach
