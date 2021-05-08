@extends('layouts.app')

@section('content')
  <div class="col-lg-8 col-md-10 mx-auto">
    <p>New Post</p>

    <form action="{{ route('Posts.store') }}" method="POST">
      

      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Title</label>
          <input type="text" class="form-control" placeholder="Title" name="title" required>
        </div>
      </div>

      @csrf
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Category</label>
          <select class="form-control" name="category_id" required>
            <option>Please select one</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Description</label>
          <input type="text" class="form-control" placeholder="Description" name="description" required >
          <p class="help-block text-danger"></p>
        </div>
      </div>

      <div class="control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <label>Owner</label>
          <input type="text" class="form-control" placeholder="Name" name="owner" required >
          <p class="help-block text-danger"></p>
        </div>
      </div>

      <br>
      <button type="submit" class="btn btn-primary">Proceed</button>
    </form>
  </div>
@endsection