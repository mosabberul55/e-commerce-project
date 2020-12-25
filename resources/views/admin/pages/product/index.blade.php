@extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Product
        </div>
        <div class="card-body">
          @include('admin.partials.message')
          <table class="table table-dark table-hover">
            <thead class="bg-info">
              <tr>
                <th>ID</th>
                <th>Product Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=0; @endphp
              @foreach ($products as $product)
                @php $i++ @endphp
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $product->title }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>
                    <a href="{!! route('admin.product.edit', $product->id) !!}" class="btn btn-success">Edit</a>
                    <a href="#deleteModal{{ $product->id }}" data-toggle="modal" class="btn btn-warning">Delete</a>

                  <!-- Delete Modal -->
                  <div class="modal" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-dark" id="exampleModalLabel">Are You sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.product.delete', $product->id) !!}"  method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger text-light">Permanent Delete</button>
                          </form>

                        </div>
                        <div class="modal-footer">

                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
