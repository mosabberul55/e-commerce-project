@extends('frontend.layouts.master')
@section('title')
  All Products || Laravel E-commerce project
@endsection
@section('content')
  {{-- start sidebar + content --}}
      <div class="row mt-2 pb-2">
        <div class="col-md-3 ml-4">
          @include('frontend.partials.productSidebar')
        </div>
        <div class="col-md-8">
          <div class="container">
          <div class="widget">
            <h3 class="text-center">All Products</h3>
            @include('frontend.pages.product.partials.allproducts')
          </div>

        </div>
      </div>
    </div>
    {{-- end sidebar + content --}}

@endsection
