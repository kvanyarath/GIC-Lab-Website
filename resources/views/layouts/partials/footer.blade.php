<!-- Start Footer -->
<footer class="g-bg-main g-pt-30 g-pb-0">
        <div class="container-fluid footer-container">
          <div class="row g-mb-10">
            
            @foreach(collect($footer_menus)->chunk(3) as $menu)
            <div class="col-6 col-md-3 g-mb-20 w-20">
              <!-- Footer Links -->
              <ul class="list-unstyled">
              @foreach($menu as $item)
                <li class="g-py-5"><a class="u-link-v5 g-color-white g-color-primary--hover g-font-size-16" href="{{$item['url_name'] ? $item['url_name'] : '#'}}">{{__($item['label'])}}</a></li>
              @endforeach               
              </ul>
              <!-- End Footer Links -->
            </div>
            @endforeach
          </div>
          <div>
            <hr class="g-bg-primary g-mt-0">
          </div>
          <!-- Footer Copyright -->
          <div class="row justify-content-lg-center align-items-top text-center">
           
          <div class="col-md-4 col-lg-4 g-mb-30 order-md-3 text-right ">
              <a class="u-link-v5 g-color-white g-color-primary--hover g-font-size-15" href="{{$mapUrl}}" target="_blank">
                <i class="align-middle mr-2 icon-real-estate-027 u-line-icon-pro"></i>
                {{__('address')}}
              </a>
              <div class="g-color-white">
              <a class="u-link-v5 g-color-white g-color-primary--hover g-font-size-15" href="tel:+855235555942">Tel : (855) 023 5555 942</a> <br>
              Fax : (855) 23 880 369 <br>
              <a class="u-link-v5 g-color-white g-color-primary--hover g-font-size-15" href="mailto:itc.gicinfo@gmail.com">E-mail : itc.gicinfo@gmail.com</a> <br>
              <a class="u-link-v5 g-color-white g-color-primary--hover g-font-size-15" href="https://gic.itc.edu.kh">Website : gic.itc.edu.kh</a> <br>
              </div>
            </div>

            <div class="col-md-4 col-lg-4 g-mb-30 order-md-2">
              <!-- Social Icons -->
              <ul class="list-inline mb-0">
                @foreach($socials as $social) 
                <li class="list-inline-item g-mx-2">
                    <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle" href="{{$social['url']}}" title="{{$social['name']}}" target="_blank">
                      <i class="g-font-size-default fa {{$social['icon']}}"></i>
                    </a>
                  </li>
                @endforeach
              </ul>
              <!-- End Social Icons -->
            </div>
            <!-- <div class="col-md-4 col-lg-3 g-mb-30 order-md-1 ">
              <p class="g-color-white mb-0">{{__('gic_fullname')}}</p>
            </div> -->
            
            <div class="col-md-4 col-lg-4 g-mb-30">
              <p class="g-color-white mb-0 text-left g-font-size-15">{{__('copyright_text')}}</p>
            </div>
          </div>
          <!-- End Footer Copyright -->
         
        </div>
      </footer>
      <!-- End Footer -->