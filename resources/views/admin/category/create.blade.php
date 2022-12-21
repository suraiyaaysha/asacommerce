@extends('layouts.admin')

@section('content')
    
  <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Add Category 
              <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end text-white">Back</a>
              </h3>
          </div>
          <div class="card-body">
            <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6" mb-3>
                  <label>Name</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                  <label>Slug</label>
                  <input type="text" name="slug" class="form-control">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mb-3">
                  <label>Description</label>
                  <textarea name="description" class="form-control" rows="3"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label>image</label>
                  <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                  <label>Status</label><br>
                  <input type="checkbox" name="status">
                </div>
              </div>

              <div class="row">

                <div class="col-md-12 mb-3">
                  <h4>SEO Tags</h4>
                </div>

                <div class="col-md-12 mb-3">
                  <label>Meta Title</label>
                  <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="col-md-12 mb-3">
                  <label>Meta Keyword</label>
                  <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                  <label>Meta Description</label>
                  <textarea name="meta_description" class="form-control" rows="3"></textarea>
                </div>
                </div>
                <div class="col-md-12 mb-3">
                  <button type="submit" class="btn btn-primary float-end text-white">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>

@endsection