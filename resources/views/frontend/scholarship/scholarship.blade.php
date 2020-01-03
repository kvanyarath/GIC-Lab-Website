@extends("layouts.main")
@section('container')
    <!-- Our Recent Projects -->
    <!-- <section class="g-py-100"> -->
    <!-- Carousel Slider -->
      <!-- Carousel Slider -->
      <div class="js-carousel u-carousel-v5"
           data-infinite="true"
           data-autoplay="true"
           data-speed="8000"
           data-pagi-classes="u-carousel-indicators-v34 g-absolute-centered--y g-left-auto g-right-30 g-right-100--md"
           data-calc-target="#js-header">

        <!-- Carousel Slides -->
        <?php foreach ($data_slider as $slider) {
          echo '<div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after" style="background-image: url('.$slider->image.');">
          <div class="container-fluid">
            <div class="g-max-width-600 g-pos-rel g-z-index-1">
              <a class="d-block g-text-underline--none--hover" href="'.$slider->address.'">
                <span class="d-block g-color-white g-font-size-20--md mb-2">
                  '.$slider->title. ': <span class="g-brd-bottom--dashed g-brd-2 g-brd-primary g-color-primary g-font-weight-700 g-pb-2">'.$slider->title_important.'</span>
                </span>
                <span class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                  '.$slider->title_description.'
                </span>
              </a>
            </div>
          </div>
        </div>
        <!-- End Carousel Slides -->
        ';
        }?>
        
       
        
      </div>
      <!-- End Carousel Slider -->

      <!-- Nav tabs -->
      <ul class="nav justify-content-end u-nav-v1-1 u-nav-dark g-mb-20" role="tablist" data-target="nav-1-1-dark-hor-right" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-darkgray g-mb-20">
      @if(isset($link))
        @if($link == 'scholarship')
        <li class="nav-item">
            <a class="nav-link active " href="scholarship" role="tab">Scholarship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="alumini_scholarship"  role="tab">Sholarship Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link "  href="scholarship_advisor"role="tab">Scholarship Advisor</a>
          </li>
        @elseif($link == 'alumini_scholarship')
        <li class="nav-item">
            <a class="nav-link "  href="scholarship"role="tab">Scholarship</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active"  href="alumini_scholarship"  role="tab">Sholarship Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link "  href="scholarship_advisor" role="tab">Scholarship Advisor</a>
          </li>
        @elseif($link == 'scholarship_advisor')
        <li class="nav-item">
            <a class="nav-link "  href="scholarship"  role="tab">Scholarship</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link "  href="alumini_scholarship"    role="tab">Sholarship Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  href="scholarship_advisor" role="tab">Scholarship Advisor</a>
          </li>
        @else
          
        @endif
      @else
      <li class="nav-item">
            <a class="nav-link active"  href="scholarship" refe="#1" role="tab">Scholarship</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="scholarship/alumini_scholarship" refe="#a2" role="tab">Sholarship Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="scholarship/scholarship_advisor" refe="#3" role="tab">Scholarship Advisor</a>
          </li>
      @endif
          
      </ul>
      <!-- End Nav tabs -->
      <!-- start scholarship -->
        <div id="nav-1-1-dark-hor-right" class="tab-content">
        <?php 
        if(isset($link) && $link=="scholarship" || !isset($link)){
          echo '<div class="tab-pane fade active show "  role="tabpanel">';
        }else{
          echo '<div class="tab-pane fade "  role="tabpanel">';
        }
      ?>
            <div class="container-fluid">
            <header class="g-mb-50">
              <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
                <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">Scholarship Programe</h2>
              </div>
              <p class="g-font-size-16"><?php if(!empty($data)){
                            echo $data->scholarship_program;
                          }else{echo "PLease Modify this description in admin page general_scholarship, PLease Modify this description in admin page general_scholarship,Lease Modify this description in admin page general_scholarship Lease Modify this description in admin page general_scholarshipLease Modify this description in admin page general_scholarshipLease Modify this description in admin page general_scholarshipLease Modify this description in admin page general_scholarshipLease Modify this description in admin page general_scholarship";}?></p>
            </header>

            <div class="u-heading-v1-1 g-brd-gray-light-v2 g-mb-20" style="background-color: #ffffff !important;">
              <h2 class="h3 u-heading-v1__title"><Strong>Up Comming Scholarship</Strong></h2>
          </div>

          <div class="row">

          <?php $i=0;
            foreach ($data_scholarship as $ds) {
              $i++;
                if($i==3){
                  echo '<div class="col-lg-4 col-md-6 g-mb-30 g-mb-0--lg">';    
                }else{
                  echo '<div class="col-lg-4 col-md-6 g-mb-30 g-mb-0--lg">';
                }
              echo '
              <article class="u-block-hover u-shadow-v21 rounded">
                <figure class="u-bg-overlay g-bg-black-opacity-0_4--after">
                  <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="'.$ds->scholarship_image.'" alt="'.$ds->scholarship_image_description.'" href="'.$ds->scholarship_reference_url.'" >
                </figure>

                <header class="u-bg-overlay__inner g-pos-abs g-top-30 g-right-30 g-left-30 g-color-white">
                  <h3 class="h4">
                      <a class="g-color-white" href="'.$ds->scholarship_reference_url.'">'.$ds->title.'</a>
                    </h3>
                  <p>'.$ds->scholarship_description.'</p>
                </header>
                </article>
                </div>';
            }
              ?>
              </article>
            </div>
            <br>
            <div class="float-right">
            {{ $data_scholarship->links() }}
            </div>
          </div>
        </div>  
      <!-- end scholarship -->

      <!-- start scholarshihp alumni -->
      <?php 
        if(isset($link) && $link=="alumini_scholarship"){
          echo '<div class="tab-pane fade active show "  role="tabpanel">';
        }else{
          echo '<div class="tab-pane fade "  role="tabpanel">';
        }
      ?>
          <!-- alumni_scholar_pro -->  
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 col-md-4 g-mb-0">
                <!-- Search Form -->
                @if(isset($link) && $link=="alumini_scholarship")
                  {{Form::open(array("url"=>"/scholarship/alumini_scholarship", 'files'=>true, 'method' => 'get'))}}
                    <select class="form-control form-control-md form-control-lg rounded-0 g-mb-25" name='myfield' onchange='this.form.submit()'>
                        <?php 
                        
                        if(isset($myfield)){
                          foreach ($country as $count) {
                              if($data_scholarship_alumini1[0]->country == $count->id){
                                $country_photo=$count->id;
                                echo '<option class="disabled">'.$count->name.'</option>';
                            }
                          }
                            foreach ($country as $count1) {
                              if($data_scholarship_alumini1[0]->country != $count1->id){
                                echo '<option value="'.$count1->id.'">'.$count1->name.'</option>';
                            }
                          }
                        }else{
                          foreach ($country as $count) {
                            if($data_scholarship_alumini[0]->country == $count->id){
                              $country_photo=$count->id;
                              echo "<option class='disabled'>Select Countries</option>";
                          }
                        }
                          foreach ($country as $count1) {
                            
                              echo '<option value="'.$count1->id.'">'.$count1->name.'</option>';
                          
                        }
                        }
                        ?>
                @endif    
                    </select>
                    <noscript><input type="submit" value="Submit"></noscript>
                  </form>
                <!-- End Search Form -->
              </div>
            </div>
            <div class="row">
              <div class="col-4 col-md-4 g-mb-0">
                <figure class="u-bg-overlay g-bg-black-opacity-0_4--after">
                  <img class="rounded-circle g-width-50 g-height-50" src="<?php 
                      if(isset($myfield)){
                    foreach ($country as $count1) {
                            if($count1->id == $country_photo){
                              echo $count1->photo;
                          }
                        }}else{
                          foreach ($country as $count1) {
                            if($count1->id == $country_photo){
                              echo $count1->photo;
                          }
                        }
                        }
                          ?> " alt="Image Description">  
                </figure>
              </div>
              <div class="col-8 col-md-8 g-mb-0">
                <!-- Default Outline Panel-->
                <div class="card card-outline-info rounded-0 ">
                  <h3 class="card-header h5 rounded-0">
                    <i class="fa fa-tasks g-font-size-default g-mr-5"></i>
                    Scholarship Award
                  </h3>
                  <div class="row">
                    <div class="col-4 col-md-4 g-mb-0" style="height:100%">

                      <!-- Figure -->
                        <figure class="u-block-hover u-shadow-v19 g-bg-white g-rounded-4 g-pa-15" >
                          <a href="/alumini_page"><img class="rounded-circle g-width-100 g-height-100" src="
                            <?php if(isset($alumnis))
                          echo $alumnis[0]->photo?>" ></a>
                          <div class="d-flex justify-content-start"> 
                            <!-- Figure Info -->
                            <div class="d-block">
                              <div class="g-mb-5">
                                <h4 class="h5 g-mb-0"><?php if(isset($alumnis))echo $alumnis[0]->alumni_name?></h4>
                                <em class="d-block g-color-primary g-font-style-normal g-font-size-default"><?php if(isset($alumnis)) echo $alumnis[0]->alumniWorkingField?></em>
                              </div>
                              <em class="d-block g-color-gray-dark-v5 g-font-style-normal g-font-size-13 g-mb-2"><?php if(isset($alumnis)) echo $alumnis[0]->alumniMail?></em>
                            </div>
                            <!-- End Figure Info -->
                          </div>
                        </figure>
                     <!-- End Figure -->
                    </div>
                    <div class="card-block col-8 col-md-8 g-mb-0">
                      <strong><h3 class="h3"><?php if(isset($myfield)){
                        echo $data_scholarship_alumini1[0]->title;}else{echo $data_scholarship_alumini[0]->title;}?></h3></strong>
                      <p class="card-text"><?php if(isset($myfield)){
                        echo $data_scholarship_alumini1[0]->scholarship_description;}else{echo $data_scholarship_alumini[0]->scholarship_description;}?></p>
                    </div>
                  </div>
                </div>
              <!-- End Default Outline Panel-->
              </div>
            </div>
            <div class="contain">
              <header class="g-mb-50">
                <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
                  <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">Scholarship Programe</h2>
                </div>
                <span class="g-font-size-16">
                <?php if(isset($myfield)){
                        echo $data_scholarship_alumini1[0]->scholarship_program;}else{echo $data_scholarship_alumini[0]->scholarship_program;}?>
                </span>
              </header>
              <header class="g-mb-50">
                <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
                  <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">Life overthere</h2>
                </div>
                <span class="g-font-size-16">
                <?php if(isset($myfield)){
                        echo $data_scholarship_alumini1[0]->life_overthere;}else{echo $data_scholarship_alumini[0]->life_overthere;}?>
                  
                </span>
              </header>
              <div class="float-right">
              <!-- Pagination -->
                @if(isset($link) && $testPagination == true)
                  @if($link == 'alumini_scholarship')
                    {{ $data_scholarship_alumini->links() }}
                  @endif
                @endif
                @if(isset($myfield))
                {{ $data_scholarship_alumini1->appends(['myfield' => $myfield ])->links()}}
                @endif
              <!-- End Pagination -->
              </div>
            </div>
          </div>
        </div>
      <!-- end scholarshihp alumni -->

      <!-- start scholarship_advisor -->
      <?php 
        if(isset($link) && $link=="scholarship_advisor"){
          echo '<div class="tab-pane fade active show "  role="tabpanel">';
        }else{
          echo '<div class="tab-pane fade "  role="tabpanel">';
        }
      ?>
          <!-- User Block -->
          <div class="container-fluid" style="background-color:grey">
            <div class="u-heading-v1-1 g-brd-gray-light-v2 g-mb-20" style="background-color: #ffffff !important;">
                <h2 class="h3 u-heading-v1__title text-center"><Strong>Scholarship Advisor</Strong></h2>
            </div>
            <div class="col-12 col-md-12 g-mb-0">
              <!-- Team Block -->
              <div class="row">
                <?php if($testPagination==true){
                  foreach ($scholarship_advisor as $advisor) {
                    echo '<div class="col-lg-4 g-mb-30">
                    <!-- Figure -->
                    <figure class="u-shadow-v19 g-bg-white g-rounded-4 g-pa-25">
                      <div class="media g-mb-20">
                        <div class="d-flex g-mr-20">
                          <!-- Figure Image -->
                          <div class="g-brd-around g-brd-3 g-brd-gray-light-v3 rounded-circle">
                            <img class="rounded-circle g-width-50 g-height-50" src="../../assets/img-temp/100x100/img4.jpg" alt="Image Description">
                          </div>
                          <!-- Figure Image -->
                        </div>
                        <div class="media-body">
                          <!-- Figure Info -->
                          <h4 class="h5 g-mb-2">name_'.$advisor->alumini_id.'</h4>
                          <div class="d-block">
                            <i class="g-color-primary g-font-size-default icon-location-pin"></i>
                            <span class="g-color-gray-dark-v4 g-font-size-13">address_'.$advisor->alumini_id.'</span>
                          </div>
                          <!-- End Figure Info -->
                        </div>
                      </div>
                      <p>'.$advisor->description.'</p>
                      <hr class="g-brd-gray-light-v4 g-my-20">
                      <!-- Figure List -->
                      
                    <!-- End Figure -->
                  </div>';
                  }
                }
              ?>
            </div>
              <!-- End Team Block -->
          </div>
          <!-- Pagination -->
          <div class="float-right">
            @if($testPagination==true)
              {{$scholarship_advisor->links()}}
            @endif
            
              <!-- End Pagination -->
            </div>
          </div>
        </div>
      <!-- end scholarship_advisor -->
    </section>
    <!-- End Our Recent Projects -->
@endsection
