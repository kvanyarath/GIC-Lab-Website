@extends('layouts.main')
@section('style')
<style>
    .section-content {
        font-size: 1.3rem;
        text-align: justify;
    }

    @media screen and (max-width: 600px) {
        .slide-title-btn {
            zoom: 0.5;
        }
    }

    .gray-indicator span {
        border-color: grey;
    }
</style>
@endsection
@section('container')
<main>

    {{-- </div> --}}
    <!-- Carousel Slider -->
    <!-- data-calc-target="#js-header" -->
    <div class="js-carousel u-carousel-v5" data-infinite="true" data-autoplay="true" data-speed="8000"
        data-pagi-classes="u-carousel-indicators-v34 gray-indicator g-absolute-centered--y g-left-auto g-right-30 g-right-100--md"
        id="slierContainer" style="height: 140px;">

        <!-- Carousel Slides -->
        @if(!empty($list_slide))
            @foreach($list_slide as $slide)
            <?php $slideimg = $slide->image_path; $slideimg=str_replace('\\','\/',$slideimg);?>
            {{-- {{Storage::url($slide->image_path)}} --}}
                <!-- for background blur -->
                <!-- g-bg-black-opacity-0_2--after -->
            <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-cover " style="background-image: url('{{Storage::url($slideimg)}}');">
                    <div class="container-fluid" style="align-self:flex-end; padding-bottom: 10px;">
                        <div class="g-max-width-600 g-pos-rel g-z-index-1">
                            <a class="d-block g-text-underline--none--hover" href="#">
                                <span class="d-block g-color-white mb-2">
                                    <a class="slide-title-btn btn btn-primary btn-xs" href="{{ $slide->link_to }}">
                                        {!! $slide->title !!}
                                    </a>
                                </span>
                                <span
                                    class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                                    <!-- {!! $slide->description !!} -->
                                </span>
                            </a>
                        </div>

                        <!-- Go to Button -->
                        <!-- <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60" href="#!" data-target="#content">
                        <span class="d-block u-go-to-v4 mr-3"></span>
                        <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">scroll down</span> to find out more
                    </a> -->
                        <!-- End Go to Button -->
                    </div>
                </div>
                <!-- End Carousel Slides -->
            @endforeach
        @else
            <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-cover g-bg-black-opacity-0_3--after"
                style="background-image: url(assets/img-temp/1920x1080/img5.jpg);">
                <div class="container-fluid">
                    <div class="g-max-width-600 g-pos-rel g-z-index-1">
                        <a class="d-block g-text-underline--none--hover" href="#">
                            <span class="d-block g-color-white g-font-size-20--md mb-2">
                                Making an Impact : <span
                                    class="g-brd-bottom--dashed g-brd-2 g-brd-primary g-color-primary g-font-weight-700 g-pb-2">Careers
                                    Day</span>
                            </span>
                            <span
                                class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                                Explore career options October 12 at the Unify Arena.
                            </span>
                        </a>
                    </div>

                    <!-- Go to Button -->
                    <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60"
                        href="#!" data-target="#content">
                        <span class="d-block u-go-to-v4 mr-3"></span>
                        <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">scroll down</span> to find out more
                    </a>
                    <!-- End Go to Button -->
                </div>
            </div>
            <!-- End Carousel Slides -->

            <!-- Carousel Slides -->
            <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-cover g-bg-black-opacity-0_2--after"
                style="background-image: url(assets/img-temp/1920x1080/img6.jpg);">
                <div class="container-fluid">
                    <div class="g-max-width-600 g-pos-rel g-z-index-1">
                        <a class="d-block g-text-underline--none--hover" href="#">
                            <span class="d-block g-color-white g-font-size-20--md mb-2">
                                Discover Unify's Faculty of <span
                                    class="g-brd-bottom--dashed g-brd-2 g-brd-primary g-color-primary g-font-weight-700 g-pb-2">Chemistry</span>
                            </span>
                            <span
                                class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                                Student work, Success stories, Faculty profiles, 360&#176; tours &amp; more
                            </span>
                        </a>
                    </div>

                    <!-- Go to Button -->
                    <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60"
                        href="#!" data-target="#content">
                        <span class="d-block u-go-to-v4 mr-3"></span>
                        <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">scroll down</span> to find out more
                    </a>
                    <!-- End Go to Button -->
                </div>
            </div>
            <!-- End Carousel Slides -->

            <!-- Carousel Slides -->
            <div class="js-slide h-100 g-flex-centered g-bg-img-hero g-bg-pos-top-center g-bg-cover g-bg-black-opacity-0_3--after"
                style="background-image: url(assets/img-temp/1920x1080/img7.jpg);">
                <div class="container-fluid">
                    <div class="g-max-width-600 g-pos-rel g-z-index-1">
                        <a class="d-block g-text-underline--none--hover" href="#">
                            <span class="d-block g-color-white g-font-size-20--md mb-2">
                                Fall <span
                                    class="g-brd-bottom--dashed g-brd-2 g-brd-primary g-color-primary g-font-weight-700 g-pb-2">Webinar
                                    Series</span>
                            </span>
                            <span
                                class="d-block g-color-white g-font-secondary g-font-size-25 g-font-size-45--md g-line-height-1_4">
                                See our full schedule and register now
                            </span>
                        </a>
                    </div>

                    <!-- Go to Button -->
                    <!-- <a class="js-go-to d-flex align-items-center g-color-white g-pos-abs g-bottom-0 g-z-index-1 g-text-underline--none--hover g-pb-60" href="#!" data-target="#content">
                <span class="d-block u-go-to-v4 mr-3"></span>
                <span class="g-brd-bottom--dashed g-brd-white-opacity-0_5 mr-1">scroll down</span> to find out more
                </a> -->
                    <!-- End Go to Button -->
                </div>
            </div>
            <!-- End Carousel Slides -->
        @endif
    </div>
    <!-- End Carousel Slider -->

    <!-- Remove Comment to enable Find a Course Element-->
    <!-- End Find a Course -->

    <!-- Remove Comment to enable Learn First Steps -->

        @include('frontend.elements.firstStep')

    <!-- End Learn First Steps -->

    <!-- Remove Comment to enable  Researches -->
    <!-- End Researches -->

    <!-- Research Statistics -->
    <!-- End Research Statistics -->

    <!-- Testimonials -->

        {{-- @include('frontend.elements.testimonial') --}}

    <!-- End Testimonials -->

    <!-- projects -->
        @include('frontend.elements.project')
    <!-- end projects -->
    <!-- Events -->

        {{-- @include('frontend.elements.events') --}}

    <!-- End Events -->

    <!-- News -->

    @include('frontend.elements.news2')

    <!-- End News -->
    @if (!empty($company_partners))
    @include('frontend.elements.partners', ['title' => __('company_partners'), 'data' => $company_partners, 'type' =>
    'Company'])
    @endif
    @if (!empty($university_partners))
    @include('frontend.elements.partners', ['title' => __('university_partners'), 'data' => $university_partners, 'type'
    => 'University'])
    @endif

    {{-- modal for display in homepage --}}

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modalParagrah">
            </div>
        </div>
    </div>
</main>

{{-- jquery framework --}}
<script src="{{ asset('js\jquery-3.4.1.min.js') }}"></script>

{{-- JS for Modal home page --}}
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal of
    var listFutureStu = document.getElementById("listFutureStu");
    var BtnAcademicProgram = document.getElementById("BtnAcademicProgram");
    var BtnTeachingMethodologies = document.getElementById("BtnTeachingMethodologies");
    var BtnCareerOpportunitiies = document.getElementById("BtnCareerOpportunitiies");

    // When the user clicks the button, open the modal
    listFutureStu.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks the button, open the modal academic with data
    BtnAcademicProgram.onclick = function() {
        modal.style.display = "block";
        var textParaph =
            "<div class=\"container-fluid\">"
               +    "<div class=\"row\">"
               +        "<div>"
               +            "<div class=\"mb-5\">"
               +                "<h2 class=\"g-mb-20\">Program List and Descriptions</h2>"
               +                "<p>"
               +                "Currently GIC runs one Engineer program (<a href=\"/degree/1/text_detail\">program Information and Communication Engineering</a>)"
               +                "and one Master program (<a href=\"/degree/2/text_detail\">Master of Mobile Technology</a>)."
               +                "Explore more about curriculum, entrance selection and how to be ready for each program by visiting page of each program."
               +                "The timetable for each program is available <a href=\"/timetable\">here</a>."
               +                "</p>"
               +            "</div>"
               +        "</div>"
               +    "</div>"
            +"</div>";
        $('#modalParagrah').append(textParaph);
    }

    BtnTeachingMethodologies.onclick = function() {
      modal.style.display = "block";
    }

    BtnCareerOpportunitiies.onclick = function() {
      modal.style.display = "block";
    }


    // Get the button that opens the modal of Project detail
    // Start project1
    @if(!empty($projects) && isset($projects[0]))
        var projectID1 = document.getElementById("project{{$projects[0]->id}}");
        projectID1.onclick = function() {
        modal.style.display = "block";
        }

        // Fectch data using Jquery
        $(document).ready(function(){

            // Fetch Project1 records
            $('#project{{$projects[0]->id}}').click(function(){
                fetchProjectRecords({{$projects[0]->id}});
            });

        });
    @endif
    // End project1

    // Start project2
    @if(!empty($projects) && isset($projects[1]))
        var projectID2 = document.getElementById("project{{$projects[1]->id}}");
        projectID2.onclick = function() {
        modal.style.display = "block";
        }
        // Fectch data using Jquery
        $(document).ready(function(){

            // Fetch Project1 records
            $('#project{{$projects[1]->id}}').click(function(){
                fetchProjectRecords({{$projects[1]->id}});
            });

        });
    @endif
    //End project2

    // Get the button that opens the modal of Event detail
    // Start event1
    @if (isset($events[0])) {
        // var event1 = document.getElementById("event{{$events[0]->id}}");
        // event1.onclick = function() {
        //     modal.style.display = "block";
        // }
        // // Fectch data using Jquery
        // $(document).ready(function(){

        //     // Fetch Project1 records
        //     $('#event{{$events[0]->id}}').click(function(){
        //         fetchEventRecords({{$events[0]->id}});
        //     });

        // });
    }
    @endif
    // End event1

    // Start event2
    @if (isset($events[1])) {
        // var event2 = document.getElementById("event{{$events[1]->id}}");
        // event2.onclick = function() {
        //     modal.style.display = "block";
        // }
        // // Fectch data using Jquery
        // $(document).ready(function(){

        //     // Fetch Project1 records
        //     $('#event{{$events[1]->id}}').click(function(){
        //         fetchEventRecords({{$events[1]->id}});
        //     });

        // });
    }
    @endif
    // End event2

    // Start evet3
    @if (isset($events[2])) {
        // var event2 = document.getElementById("event{{$events[2]->id}}");
        // event2.onclick = function() {
        //     modal.style.display = "block";
        // }
        // // Fectch data using Jquery
        // $(document).ready(function(){

        //     // Fetch Project1 records
        //     $('#event{{$events[2]->id}}').click(function(){
        //         fetchEventRecords({{$events[2]->id}});
        //     });

        // });
    }
    @endif
    // End event3

    //Start Event4
    @if (isset($events[3])) {
        // var event2 = document.getElementById("event{{$events[3]->id}}");
        // event2.onclick = function() {
        //     modal.style.display = "block";
        // }
        // // Fectch data using Jquery
        // $(document).ready(function(){

        //     // Fetch Project1 records
        //     $('#event{{$events[3]->id}}').click(function(){
        //         fetchEventRecords({{$events[3]->id}});
        //     });

        // });
    }
    @endif
    // End Event4

    // Start Event5
    @if (isset($events[4])) {
        // var event2 = document.getElementById("event{{$events[4]->id}}");
        // event2.onclick = function() {
        //     modal.style.display = "block";
        // }
        // // Fectch data using Jquery
        // $(document).ready(function(){

        //     // Fetch Project1 records
        //     $('#event{{$events[4]->id}}').click(function(){
        //         fetchEventRecords({{$events[4]->id}});
        //     });

        // });
    }
    @endif
    // End event5

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
        $("#modalParagrah").empty();
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
        $("#modalParagrah").empty();
      }
    }

    // Fectch data using Jquery
    $(document).ready(function(){

    // Fetch future students records
    $('#listFutureStu').click(function(){
        fetchRecords('future_students');
    });
    // Fetch Teaching Methodologies records
    $('#BtnTeachingMethodologies').click(function(){
        fetchRecords('teaching_methodologies');
    });
    // Fetch Career Opportunitiies records
    $('#BtnCareerOpportunitiies').click(function(){
        fetchRecords('career_opportunities');
    });

    });

    //function for retrieve data of site contents
    function fetchRecords(url){
        $.ajax({
        url: 'site-content-jqery/'+url,
        type: 'get',
        dataType: 'json',
        success: function(response){
            var textParaph;
            textParaph ="<h4 class=\"h1 g-font-size-40--md g-mb-40 text-center\" style=\"text-transform: capitalize;\">"+response['data'].developer_name.replace('_', ' ')+"</h4>" + response['data'].html_text+
                            "<a class=\"btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13\" href=\"\/site-content\/"+url+"\">@lang('see_more')<i class=\"ml-2 fa fa-long-arrow-right\"></i></a>";
            $('#modalParagrah').append(textParaph);
        }
        });
    }

    //function for retrieve data of project contents
    function fetchProjectRecords(projectID){
        $.ajax({
        url: 'gic-projects-jqery/'+projectID,
        type: 'get',
        dataType: 'json',
        success: function(response){
            var textParaph;
            textParaph =    "<h4 class=\"h1 g-font-size-40--md g-mb-40 text-center\">"
                            +response['data'].title_en+
                            "</h4>"+
                            "<div class=\"container-fluid g-mt-50\">"+
                                "<div class=\"text-right g-mb-10\"> Stutus :";
            if (response['data'].ongoing_project==0){
                textParaph = textParaph + " Completed";
            }
            else{
                textParaph = textParaph + " Ongoing";
            }
            textParaph =    textParaph+"</div>"
                                +response['data'].description_en+
                            "</div>"+
                            "<a class=\"btn u-btn-outline-primary g-font-weight-600 g-rounded-50 g-px-30 g-py-13\" href=\"\/gic-projects\/"+projectID+"\">@lang('see_more')<i class=\"ml-2 fa fa-long-arrow-right\"></i></a>";
            $('#modalParagrah').append(textParaph);
        }
        });
    }

    //function for retrieve data of event contents
    function fetchEventRecords(eventID){
        $.ajax({
        url: 'events-jquery/'+eventID,
        type: 'get',
        dataType: 'json',
        success: function(response){
            var textParaph;
            textParaph =
            "<div class=\"container-fluid\">"+
                "<div class=\"row d-flex justify-content-center\">"+
                    "<div class=\"col-9 d-flex\">"+
                        "<div class=\"mx-auto my-auto g-px-30\">"+
                            "<h2 class=\"h1 text-center\">"
                                +response['data'].name+
                            "</h2>"+
                            "<div class=\"text-center h5 g-color-gray-dark-v3 g-pt-10\">"+
                            "   Date: "+response['data'].start_date + "-"+response['data'].end_date +
                            "</div>"+
                        "</div>"+
                   " </div>"+
                "</div>"+
                "<div class=\"g-py-30 row d-flex justify-content-center\">"+
                    "<div class=\"col-md-9 text-center g-mb-30\">"+
                        "<img class=\"img-fluid\" src=\"\{\{Storage::url("+response['data'].image+")\}\}\" alt=\"\">"+
                    "</div>"+
                    "<div class=\"col-md-9\">"
                        +response['data'].detail+
                    "</div>"+
                "</div>"+
            "</div>";

            $('#modalParagrah').append(textParaph);
            console.log(textParaph);
        }
        });
    }

</script>
@endsection
