@extends('layouts.main')
@section('container')
@include('frontend.partials.breadcrumb', ['title' => __('Faqs')])

    <main>
      <!-- Promo Block -->
    <section class="container-fluid text-center g-pt-120 g-pb-30">
      <h2 class="g-color-black g-font-weight-600 g-font-size-50 g-mb-70">@lang('Frequently Asked Questions')</h2>
   
      <ul class="list-inline mb-0">
      @foreach($types as $type)
        <li class="list-inline-item g-brd-right g-brd-gray-light-v4 px-4 mx-0">
          <a class="g-color-primary--hover js-go-to g-color-gray-dark-v5 g-font-weight-600 text-uppercase g-text-underline--none--hover" href="#" data-target="#{{$type->id}}head">
              {{$type->label}}
            </a>
        </li>
      @endforeach 
      </ul>
    
      
    </section>
    <!-- End Promo Block -->

    <!-- Accordion -->
    <section class="container-fluid g-pb-100">
    @foreach($types as $t)
      @foreach($t->faqTypes as $type)
      <!-- Accordion -->
      <div id="{{$t->id}}head" class="u-shadow-v11 rounded g-py-30 g-mb-100">
        <div class="row justify-content-center">
          <div class="col-lg-10">

             <!-- Heading -->
            <div class="text-center g-mb-60 d-flex" style="justify-content: space-between;">
              <span></span>
              <h2 class="g-font-weight-600 text-uppercase mb-2">{{$type->label}}</h2>
              <div class="g-pt-10 g-color-gray-dark-v5 g-font-weight-300 text-uppercase">{{$t->label}}</div>
            </div>
            <!-- End Heading -->
            @foreach($type->faqs as $faq) 
           @if($type->id == $faq->faq_type_id)
            <div class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
           
              <!-- Card -->
          
              <div class="card g-brd-none rounded-0 g-mb-20">
                <div  class="g-brd-bottom g-brd-gray-light-v4 g-pa-0" role="tab">
                  <h5 class="mb-0">
                      <a class="g-font-size-24 collapsed d-flex justify-content-between g-color-blue g-text-underline--none--hover rounded-0 g-px-30 g-py-20" href="#love{{$faq->id}}" data-toggle="collapse">
                          {{$faq->question}}
                        <span class="u-accordion__control-icon">
                          <i class="fa fa-angle-down"></i>
                          <i class="fa fa-angle-up"></i>
                        </span>
                      </a>
                    </h5>
                </div>
             
                <div id="love{{$faq->id}}" class="collapse"  >
                  <div class="g-font-size-16 u-accordion__body g-color-primary g-pa-30">
                      {!! $faq->answer !!}
                  </div>
                </div>
            
              </div>
              <!-- End Card -->
            </div>
            @endif
          @endforeach
          </div>
        </div>
      </div>
      @endforeach
      @endforeach 
      <!-- End Accordion -->
    </section>
    </main>
@endsection
