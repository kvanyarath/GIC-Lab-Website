<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>About GIC</title>
    
    <!-- Required Meta Tags Always Come First -->
   
  </head>

  <body>
    <main>
    <!-- Header -->
    @extends('layouts.main')
    @section('container')
    <!--EndHeader-->

      <!-- Promo Block -->
      <div class="g-bg-img-hero g-pos-rel" style="background-image: url(assets/img/bg/bg-img1.png);">
        <div class="container-fluid g-pt-100">
          <div class="row justify-content-lg-between">
            <div class="col-lg-4 g-pt-50--lg">
              <div class="mb-5">
                <h1 class="g-font-size-45 mb-4"> Welcome!</h1>
                <p><?php  if(!empty($data)){
                            echo $data->welcome_back_description;
                          }else{echo "Welcome To GIC Website Have a nice day";} 
                    ?>
                </p>
              </div>

              <!-- <a class="js-go-to btn u-shadow-v33 g-hidden-md-down g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-10" href="#!" data-target="#content">Explore Now</a> -->
            </div>
            <div class="col-lg-8 align-self-end">
              <div class="u-shadow-v40 g-brd-around g-brd-7 g-brd-secondary rounded">
                <img class="img-fluid rounded" src="
                    <?php if(!empty($data)){
                            echo $data->aboutUs_welcome_photo;
                          }else{echo "\img\aboutUs_default_photo.jpg";} ?>" alt="Image Description">
              </div>
            </div>
          </div>
        </div>

        <!-- SVG Bottom Background Shape -->
        <svg class="g-pos-abs g-bottom-0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1921 183.5" enable-background="new 0 0 1921 183.5" xml:space="preserve">
          <path fill="#FFFFFF" d="M0,183.5v-142c0,0,507,171,1171,58c0,0,497-93,750,84H0z"/>
          <path opacity="0.2" fill="#FFFFFF" d="M0,183V0c0,0,507,220.4,1171,74.7c0,0,497-119.9,750,108.3H0z"/>
        </svg>
        <!-- End SVG Bottom Background Shape -->
      </div>
      <!-- End Promo Block -->

      <!-- About Current Students -->
      <div id="content" class="container-fluid g-py-70">
        <div class="row">
          <div class="col-lg-9 order-lg-2">
            <div class="g-pl-15--lg">
              <h2>About Us</h2>
              <p><?php if(!empty($data)){
                            echo $data->aboutUs_description;
                          }else{echo "This page is managed by Department of Information and Communication Engineering (DICE) in Institute of Technology of Cambodia.";}?></p>
              <hr class="g-brd-secondary-light-v2 my-5">

              <div class="row">
                <div class="col-md-6 g-mb-30">
                  <h3 class="h4 mb-3">History</h3>

                  <div class="g-overflow-hidden">
                    <a class="u-block-hover g-text-underline--none--hover" >
                      <img class="img-fluid u-block-hover__main--zoom-v1" src="<?php if(!empty($data)){
                            echo $data->history_photo;
                          }else{echo "assets/include/svg/svg-system-login1.svg";}?>" align="Image Description">
                    </a>
                  </div>
                </div>

                <div class="col-md-6 g-mb-30">
                  <h3 class="h4 mb-3"><pre>  </pre></h3>
                  <div><?php if(!empty($data)){
                            echo $data->aboutUs_description;
                          }else{echo "The Institute was founded in 1964 as Institut Technique Supérieur de l'Amitié Khméro–Soviétique (ITSAKS; The Superior Technical Institute of Khmer–Soviet Friendship, Khmer: វិទ្យាស្ថានបច្ចេកទេសជាន់ខ្ពស់មិត្តភាពខ្មែរ សូវៀត). It was funded by the Soviet Union from 1964 to 1975 and from 1980 to 1991. This support ended in 1991 with the dissolution of the Soviet Union.[not verified in body]
                            In 1993, the Royal Government of Cambodia and the Government of France signed an agreement to develop the renovation of the institute which then took its present name.";}?></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 order-lg-1">
            <!-- Sidebar Links -->
            <ul class="list-unstyled">
            <?php
              foreach ($data_link[0] as $db) {
                echo ' <li class="mb-1">';
                  echo '<a class="d-block u-link-v5 g-color-text g-color-white--hover g-bg-secondary g-bg-main--hover g-font-size-default rounded g-pl-30--hover g-px-20 g-py-7" href="'.$db->link.'">';
                  echo '<i class="g-font-size-13 g-pos-rel g-top-2 mr-2 material-icons">arrow_forward</i>';
                  echo   ($db->link_title);
                  echo '</a>';
                echo '</li>';
              }
            ?>
            </ul>
            <!-- End Sidebar Links -->
          </div>
        </div>
      </div>
      <!-- End About Current Students -->

      <!-- More Links -->
      <div class="g-bg-img-hero" style="background-image: url(assets/include/svg/svg-bg1.svg);">
        <div class="container-fluid g-py-100">
          <!-- Heading -->
          <div class="g-max-width-645 text-center mx-auto g-mb-60">
            <h2 class="h1">Learning Program</h2>
          </div>
          <!-- End Heading -->
              <?php  $i = 0;
              if(count($learning_program[0]) != 0){
                foreach ($learning_program[0] as $lp) {
                  if($i%3 == 0){
                    echo '<div class="card-group d-block d-md-flex g-mx-minus-4">';
                  }
                  
                 echo '<div class="card g-brd-none g-mx-4 g-mb-8">
                  <!-- Links -->
                  <div class="card-body u-shadow-v38 g-bg-white rounded g-pa-40">
                    <span class="u-icon-v3 u-shadow-v31 g-color-main g-bg-secondary-dark-v2 rounded-circle mb-4">
                      <i class="icon-education-051 u-line-icon-pro"></i>
                    </span>
                    <h3 class="h4">'.$lp->title.'</h3>
                    <p class="g-color-text-light-v1">'.$lp->description.'</p>
                    <a class="u-link-v5 g-color-main--hover g-font-size-default" href="'.$lp->program_link.'">Learn More<i class="g-font-size-13 ml-2 material-icons">arrow_forward</i></a>
                  </div>
                  <!-- End Links -->
                </div>';
                $i++; 
                    if($i%3 == 0){
                            echo '</div>';
                          }  
                }
                
              }else{
                echo '<div class="card-group d-block d-md-flex g-mx-minus-4">
                <div class="card g-brd-none g-mx-4 g-mb-8">
                  <!-- Links -->
                  <div class="card-body u-shadow-v38 g-bg-white rounded g-pa-40">
                    <span class="u-icon-v3 u-shadow-v31 g-color-main g-bg-secondary-dark-v2 rounded-circle mb-4">
                      <i class="icon-finance-245 u-line-icon-pro"></i>
                    </span>
                    <h3 class="h4">Money</h3>
                    <p class="g-color-text-light-v1">University fees and costs, and financial support such as scholarships, bursaries and research funding.</p>
                    <a class="u-link-v5 g-color-main--hover g-font-size-default" href="#">Learn More<i class="g-font-size-13 ml-2 material-icons">arrow_forward</i></a>
                  </div>
                  <!-- End Links -->
                </div>
    
                <div class="card g-brd-none g-mx-4 g-mb-8">
                  <!-- Links -->
                  <div class="card-body u-shadow-v38 g-bg-white rounded g-pa-40">
                    <span class="u-icon-v3 u-shadow-v31 g-color-main g-bg-secondary-dark-v2 rounded-circle mb-4">
                      <i class="icon-education-039 u-line-icon-pro"></i>
                    </span>
                    <h3 class="h4">Your Studies</h3>
                    <p class="g-color-text-light-v1">Enrolment and course planning, timetables, exams and assessments, honours and higher degree by research.</p>
                    <a class="u-link-v5 g-color-main--hover g-font-size-default" href="#">Learn More<i class="g-font-size-13 ml-2 material-icons">arrow_forward</i></a>
                  </div>
                  <!-- End Links -->
                </div>
    
                <div class="card g-brd-none g-mx-4 g-mb-8">
                  <!-- Links -->
                  <div class="card-body u-shadow-v38 g-bg-white rounded g-pa-40">
                    <span class="u-icon-v3 u-shadow-v31 g-color-main g-bg-secondary-dark-v2 rounded-circle mb-4">
                      <i class="icon-education-055 u-line-icon-pro"></i>
                    </span>
                    <h3 class="h4">New Students</h3>
                    <p class="g-color-text-light-v1">Essential information and resources to help get you started at Sydney.</p>
                    <a class="u-link-v5 g-color-main--hover g-font-size-default" href="#">Learn More<i class="g-font-size-13 ml-2 material-icons">arrow_forward</i></a>
                  </div>
                  <!-- End Links -->
                </div>
              </div>';
              }
          ?> 
        </div>
      </div>
      <!-- End More Links -->

      <!-- Admission Heading -->
      <div class="container-fluid">
        <div class="g-max-width-645 text-center mx-auto g-mb-60">
            <h2 class="h1"><?php if(!empty($data)){
              echo $data->partnership_title;
            }else{
              echo 'Partnership';}?></h2>
              <p><?php if(!empty($data)){
                            echo $data->partnership_description;
                        }else{echo "This page is managed by Department of Information and Communication Engineering (DICE) in Institute of Technology of Cambodia.";}?></p>
        </div>
        <!-- End Heading -->
      </div>
      <!-- End Admission Heading -->
      <!-- Notice -->
      <div class="g-bg-secondary">
        <div class="container-fluid g-px-8 g-pt-8">
          <!-- Notice Carousel -->
          <div class="js-carousel u-carousel-v5 g-mx-minus-4"
               data-slides-show="4"
               data-slides-scroll="1"
               data-arrows-classes="u-icon-v3 u-icon-size--sm g-absolute-centered--x g-bottom-minus-70 g-color-main g-color-white--hover g-bg-secondary g-bg-primary--hover rounded g-pa-11"
               data-arrow-left-classes="fa fa-angle-left g-ml-minus-25"
               data-arrow-right-classes="fa fa-angle-right g-ml-25"
               data-responsive='[{
                 "breakpoint": 992,
                 "settings": {
                   "slidesToShow": 3
                 }
               }, {
                 "breakpoint": 768,
                 "settings": {
                   "slidesToShow": 2
                 }
               }, {
                 "breakpoint": 554,
                 "settings": {
                   "slidesToShow": 1
                 }
               }]'>
              
            <?php if(count($partnership[0]) != 0){
              foreach ($partnership[0] as $ps) {
              echo ' 
              <!-- Notice - Article -->
              <div class="js-slide g-mx-4 g-mb-8">
                <div class="u-info-v11-1 g-bg-white text-center rounded g-px-40 g-py-50">
                  <div class="g-width-150 g-height-150 mx-auto mb-4">
                    <img class="img-fluid u-info-v11-1-img rounded-circle" src="'.$ps->logo_p.'" alt="Image Description">
                  </div>
                  <div class="mb-5">
                    <h3 class="mb-3">'.$ps->name_p.'</h3>
                    <p>'.$ps->description_p.'</p>
                  </div>
                  <a class="btn g-brd-secondary-light-v2 g-brd-primary--hover g-color-text-light-v1 g-color-white--hover g-bg-primary--hover g-font-size-15 g-rounded-30 g-px-25 g-py-10" href="https://'.$ps->url_p.'">Read Now</a>
                </div>
              </div>
              <!-- End Notice - Article -->';
            }
          }else{
           echo ' <!-- Notice - Article -->
              <div class="js-slide g-mx-4 g-mb-8">
                <div class="u-info-v11-1 g-bg-white text-center rounded g-px-40 g-py-50">
                  <div class="g-width-150 g-height-150 mx-auto mb-4">
                    <img class="img-fluid u-info-v11-1-img rounded-circle" src="data:image/png;base64,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" alt="Image Description">
                  </div>
                  <div class="mb-5">
                    <h3 class="mb-3">smart</h3>
                    <p>Hi there! My name is Bong Smart, a Smart Virtual Assistant. Is there anything that I can help you with? 
                    សួស្តី! ខ្ញុំជា Bong Smart ដែលជាជំនួយការរបស់អ្នក៕ តើមានអ្វីដែលខ្ញុំអាចជួយអ្នកបាន?</p>
                  </div>
                  <a class="btn g-brd-secondary-light-v2 g-brd-primary--hover g-color-text-light-v1 g-color-white--hover g-bg-primary--hover g-font-size-15 g-rounded-30 g-px-25 g-py-10" href="http://www.smart.com.kh">Read Now</a>
                </div>
              </div>
              <!-- End Notice - Article -->';
          }
            ?>
          </div>
          <!-- End Notice Carousel -->
        </div>
      </div>
      <!-- End Notice -->

      <!-- Go to Top -->
      <a class="js-go-to u-go-to-v1 u-shadow-v32 g-width-40 g-height-40 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-bg-main--focus g-font-size-12 rounded-circle" href="#" data-type="fixed" data-position='{
       "bottom": 15,
       "right": 15
     }' data-offset-top="400"
        data-compensation="#js-header"
        data-show-effect="slideInUp"
        data-hide-effect="slideInDown">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
      <!-- End Go to Top -->
    </main>
  </body>
</html>
@endsection
