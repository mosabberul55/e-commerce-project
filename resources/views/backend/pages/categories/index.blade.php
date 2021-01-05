@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Manage Product
        </div>
        <div class="card-body">
          @include('backend.partials.message')
          <table class="table table-dark table-hover">
            <thead class="bg-info">
              <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Category Image</th>
                <th>Parent Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=0; @endphp
              @foreach ($categories as $category)
                @php $i++ @endphp
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $category->name }}</td>
                  <td><img src="{!! asset('images/categories/'.$category->image) !!}" width="100"></td>
                  <td>@if ($category->parent_id == NULL)
                    Primary Category
                  @else
                    {{ $category->parent->name }}
                  @endif</td>
                  <td>
                    <a href="{!! route('admin.category.edit', $category->id) !!}" class="btn btn-success">Edit</a>
                    <a href="#deleteModal{{ $category->id }}" data-toggle="modal" class="btn btn-warning">Delete</a>

                  <!-- Delete Modal -->
                  <div class="modal" id="deleteModal{{ $category->id }}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-dark" id="exampleModalLabel">Are You sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.category.delete', $category->id) !!}"  method="post">
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
