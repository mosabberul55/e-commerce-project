@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Brand
        </div>
        <div class="card-body">
          <form action="{{ route('admin.brand.update', $brand->id) }}" method="post" enctype="multipart/form-data">
            @include('backend.partials.message')
            @csrf
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $brand->name }}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control">{{ $brand->description }}</textarea>
            </div>
            <div class="form-group">
              <label for="brand-image">Brand Old Image</label><br>
              <img src="{!! asset('images/brands/'.$brand->image) !!}" width="100"><br><br>
              <label for="brand-image">Brand new Image</label>
              <div class="row">
                <div class="col-md-4">
                  <input type="file" class="form-control" name="image" id="brand-image">
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Update Brand</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
