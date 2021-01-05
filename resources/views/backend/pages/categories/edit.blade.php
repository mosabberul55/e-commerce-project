@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Edit Category
        </div>
        <div class="card-body">
          <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
            @include('backend.partials.message')
            @csrf
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control">{{ $category->description }}</textarea>
            </div>
            <div class="form-group">
              <label for="parent_category">Category Root</label>
              <select class="form-control" name="parent_id" id="parent_category">
                @foreach ($main_categories as $cat)
                  <option value="">Saved As parent</option>
                  <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : ''}}>{{ $cat->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="category_image">Category Old Image</label><br>
              <img src="{!! asset('images/categories/'.$category->image) !!}" width="100"><br><br>
              <label for="category_image">Category new Image</label>
              <div class="row">
                <div class="col-md-4">
                  <input type="file" class="form-control" name="image" id="category_image">
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
