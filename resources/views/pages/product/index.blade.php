@extends('layouts.master')
@section('content')
  {{-- start sidebar + content --}}
      <div class="row mt-2 pb-2">
        <div class="col-md-3 ml-4">
          @include('partials.productSidebar')
        </div>
        <div class="col-md-8">
          <div class="container">
          <div class="widget">
            <div class="row">
            @foreach ($products as $product)
              <div class="col-md-3 mb-2">
                <div class="card">
                  @php  $i = 1;  @endphp
                  @foreach ($product->images as $img)
                    @if ($i > 0)
                      <img class="card-img-top img-fluid feature-img" src="{!! asset('images/products/'. $img->image) !!}" width="250px" alt="">
                    @endif
                    @php  $i--;  @endphp

                  @endforeach

                  <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <h6 class="card-subtitle my-2">Brand: xiaomi</h6>
                    <p class="card-text">{{ $product->price }}</p>
                    <a class="btn btn-outline-warning btn-block" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
            @endforeach


            </div>
          </div>

        </div>
      </div>
    </div>
    {{-- end sidebar + content --}}

@endsection
