@extends('layouts.apps')

@section('content')
<div class="container">
    <h2>Upload New Video</h2>
<form method="post" action="{{ route('video-store') }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
              <label for="name">Title</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Title"> 
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="Enter description"> 
            </div>

            <div class="form-group">
                <label for="video">Link Video</label>
                <input type="text" class="form-control" name="link" id="link" placeholder="Share link"> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>  
@endsection
