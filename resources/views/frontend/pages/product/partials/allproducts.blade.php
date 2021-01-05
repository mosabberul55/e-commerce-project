<div class="row">
@foreach ($products as $product)
  <div class="col-md-3 mb-2">
    <div class="card">
      @php  $i = 1;  @endphp
      @foreach ($product->images as $img)
        @if ($i > 0)
            <a href="{!! route('product.show', $product->slug) !!}">
          <img class="card-img-top img-fluid feature-img" src="{!! asset('images/products/'. $img->image) !!}" width="250px" alt="{{  $product->title }}">
          </a>
        @endif
        @php  $i--;  @endphp

      @endforeach

      <div class="card-body">
        <h5 class="card-title">
          <a href="{!! route('product.show', $product->slug) !!}">{{ $product->title }}</a>
        </h5>
        <h6 class="card-subtitle my-2">Brand: xiaomi</h6>
        <p class="card-text">{{ $product->price }}</p>
        <a class="btn btn-outline-warning btn-block" href="#">Add to Cart</a>
      </div>
    </div>
  </div>
@endforeach
</div>
<div class="pagination">
  {{ $products->links() }}
</div>
<style media="screen">
  .w-5{
  display: none;
  }
</style>
