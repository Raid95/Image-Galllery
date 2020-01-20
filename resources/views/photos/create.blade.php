@extends('layouts.apps')

@section('content')
<div class="container">
    <h2>Upload New Photo</h2>
    <form method="post" action="{{ route('photo-store') }}" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="gallery-id" value="{{ $galleryId }}">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"> 
            </div>

            <div class="form-group">
              <label for="description">Decription</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="Enter description"> 
            </div>

            <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" name="photo" id="photo" multiple> 
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>  
@endsection
