@extends('layouts.app')

@section('content')
<div class="container">
<header>
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary ">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('Posts.index') }}">Post</a>
            </li>
        </div>
      </nav>
    </header>
</div>
@endsection
