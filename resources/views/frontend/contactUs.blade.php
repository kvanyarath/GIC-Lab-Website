<title>Contact Us | GIC</title>
@extends('layouts.main')
@section('container')

      <!-- Contacts -->
      <div class="g-bg-img-hero g-bg-pos-top-center" style="background-image: url(assets/include/svg/svg-bg2.svg);">
        <div class="container-fluid g-pb-20">
            <div id="app">
                @include('menu.flash-message')
            </div>
          <!-- Heading -->
          <div class="g-max-width-645 text-center mx-auto g-mb-40 g-pt-60">
            <h1 class="g-font-size-40--md mb-4">{{ 'Contact Us' }}</h1>
            <p> <?php if(!empty($data)){
                            echo $data->contactUs_description;
                          }else{echo "YOU CAN EDIT THIS IN ADMIN PAGE";}?></p>
          </div>
          <!-- End Heading -->

          <div class="row justify-content-lg-center align-items-center">
            <div class="col-md-8 col-lg-7 g-mb-50">
              <!-- Contact Form -->
              
              <form class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50" action='{{route("frontend.postContactUs")}}' method = 'POST'>
              {{csrf_field()}}
                <!-- Name Input -->
                <div class="row align-items-center mb-4">
                  <div class="col-lg-4">
                    <label class="g-font-weight-500 g-font-size-16">{{'Your full name'}}</label>

                  </div>
                  <div class="col-lg-8">
                    <input class="form-control h-100 g-brd-none g-bg-secondary g-bg-secondary-dark-v1--focus rounded g-px-20 g-py-12" type="text" placeholder="John Doe" name="name">
                  </div>
                </div>
                <!-- End Name Input -->

                <!-- Name Input -->
                <div class="row align-items-center mb-3">
                  <div class="col-lg-4">
                    <label class="g-font-weight-500 g-font-size-16">{{'Your email address'}}</label>
                  </div>
                  <div class="col-lg-8">
                    <input class="form-control h-100 g-brd-none g-bg-secondary g-bg-secondary-dark-v1--focus rounded g-px-20 g-py-12" type="email" placeholder="john@gmail.com" name="email">
                  </div>
                </div>
                <!-- End Name Input -->

                <!-- Name Input -->
                <div class="row mb-4">
                  <div class="col-lg-4">
                    <label class="g-font-weight-500 g-font-size-16">{{'Your question'}}</label>
                  </div>
                  <div class="col-lg-8">
                    <textarea class="form-control g-brd-none g-bg-secondary g-bg-secondary-dark-v1--focus rounded g-px-20 g-py-12" rows="5" placeholder="Hi there, I would like to ..." name ="question"></textarea>
                  </div>
                </div>
                <!-- End Name Input -->

                <div class="text-right">
                  <button type="submit" class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-10">Submit</button>
                </div>
              </form>
              <!-- End Contact Form -->
            </div>

            <div class="col-md-4 col-lg-3 g-mb-50">
              <div class="g-pl-30--lg">
                <h2 class="h3 mb-4">{{'Address Details'}}:</h2>
                <!-- Contact Info -->
                <div class="media align-items-center mb-4">
                  <div class="d-flex mr-3">
                    <span class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                      <i class="fa fa-map-marker"></i>
                    </span>
                  </div>
                  <div class="media-body">
                    <span> <?php if(!empty($data)){
                            echo $data->institute_address;
                          }else{echo "YOU CAN EDIT THIS IN ADMIN PAGE";}?></span>
                  </div>
                </div>
                <!-- End Contact Info -->

                <!-- Contact Info -->
                <div class="media align-items-center mb-4">
                  <div class="d-flex mr-3">
                    <span class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                      <i class="fa fa-envelope-open"></i>
                    </span>
                  </div>
                  <div class="media-body">
                    <span><?php if(!empty($data)){
                            echo $data->email;
                          }else{echo "YOU CAN EDIT THIS IN ADMID PAGE";}?></span>
                  </div>
                </div>
                <!-- End Contact Info -->

                <!-- Contact Info -->
                <div class="media align-items-center">
                  <div class="d-flex mr-3">
                    <span class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                      <i class="fa fa-phone"></i>
                    </span>
                  </div>
                  <div class="media-body">
                    <span><?php if(!empty($data)){
                            echo $data->phone;
                          }else{echo "YOU CAN EDIT THIS IN ADMID PAGE";}?></span>
                  </div>
                </div>
                <!-- End Contact Info -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Contacts -->
@endsection
