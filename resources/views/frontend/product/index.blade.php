@extends('layouts.main')

@section('container')

@include('frontend.partials.title', ['title' => __('products')])

<div class="container-fluid g-mb-100">
    <div class="row">
    @foreach($products as $product)
    <div class="col-6 g-mb-30">
          <!-- Figure -->
          <figure class="u-info-v1-4 u-shadow-v1-3 g-overflow-hidden mb-0">
            <!-- Figure Image -->
            <img class="w-100 g-transition-0_2" src="{{$product->image}}" alt="Product image">
            <!-- End Figure Image-->

            <a class="cbp-caption cbp-singlePageInline u-link-v2" href="/products/{{$product->id}}"></a>

            <!-- Figure Caption -->
            <figcaption style="background-color: #696969!important;" class="g-transition-0_2 g-bg-black g-color-white g-px-30 g-py-10">
              <h4 class="h6 g-font-weight-500 mb-0">{{$product->title}}</h4>
              <!-- <em class="d-block g-color-white-opacity-0_8 g-font-style-normal g-font-size-13">Logo</em> -->
            </figcaption>
            <!-- End Figure Caption-->
          </figure>
          <!-- End Figure -->
    </div>   
    @endforeach
    </div>
    {{$products->links()}}
</div>

@endsection
 
 