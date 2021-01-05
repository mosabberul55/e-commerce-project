@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Brand
        </div>
        <div class="card-body">
          <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">
            @include('backend.partials.message')
            @csrf
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label for="brand_image">Brand Image</label>
              <div class="row">
                <div class="col-md-4">
                  <input type="file" class="form-control" name="image" id="brand_image">
                </div>

              </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Brand</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
