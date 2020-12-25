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
              <div class="col-md-3 mb-2">
                <div class="card">
                  <img class="card-img-top img-fluid feature-img" src="{!! asset('images/products/m3.png') !!}" width="250px" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Redmi Note 9</h5>
                    <h6 class="card-subtitle my-2">Brand: xiaomi</h6>
                    <p class="card-text">Price: 1000tk</p>
                    <a class="btn btn-outline-warning btn-block" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <div class="card">
                  <img class="card-img-top img-fluid feature-img" src="{!! asset('images/products/note9.png') !!}" width="250px" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Xiaomi Poco M2</h5>
                    <h6 class="card-subtitle my-2">Brand: xiaomi</h6>
                    <p class="card-text">Price: 1000tk</p>
                    <a class="btn btn-outline-warning btn-block" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <div class="card">
                  <img class="card-img-top img-fluid feature-img" src="{!! asset('images/products/m3.png') !!}" width="250px" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Redmi Note 9</h5>
                    <h6 class="card-subtitle my-2">Brand: xiaomi</h6>
                    <p class="card-text">Price: 1000tk</p>
                    <a class="btn btn-outline-warning btn-block" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <div class="card">
                  <img class="card-img-top img-fluid feature-img" src="{!! asset('images/products/note9.png') !!}" width="250px" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Xiaomi Poco M2</h5>
                    <h6 class="card-subtitle my-2">Brand: xiaomi</h6>
                    <p class="card-text">Price: 1000tk</p>
                    <a class="btn btn-outline-warning btn-block" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <div class="card">
                  <img class="card-img-top img-fluid feature-img" src="{!! asset('images/products/m3.png') !!}" width="250px" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Redmi Note 9</h5>
                    <h6 class="card-subtitle my-2">Brand: xiaomi</h6>
                    <p class="card-text">Price: 1000tk</p>
                    <a class="btn btn-outline-warning btn-block" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <div class="card">
                  <img class="card-img-top img-fluid feature-img" src="{!! asset('images/products/note9.png') !!}" width="250px" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Xiaomi Poco M2</h5>
                    <h6 class="card-subtitle my-2">Brand: xiaomi</h6>
                    <p class="card-text">Price: 1000tk</p>
                    <a class="btn btn-outline-warning btn-block" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>


            </div>
          </div>

        </div>
      </div>
    </div>
    {{-- end sidebar + content --}}

@endsection
