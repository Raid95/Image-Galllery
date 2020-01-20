@extends('layouts.apps')

@section('content')
<div class="container">
    <a href="{{ route('gallery-create') }}" padding= "35px" class="btn btn-info">Create New Album</a>  
    <br>
    <br>
    @if (count($galleries) > 0)
        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">  
                    <img src="/storage/gallery_covers/{{ $gallery->cover_image }}" alt="{{ $gallery->cover_image }}" height="200px">
                    <div class="card-body">
                    <p class="card-text">{{ $gallery->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href="{{ route ('gallery-show', $gallery->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                        </div>
                    <small class="text-muted">{{ $gallery->name }}</small>
                        </div>
                    </div>
                    </div>
                </div>
          @endforeach
        </div>
    @else
    <h3>No Albums yet.</h3>
    @endif
</div>
@endsection