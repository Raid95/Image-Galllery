@extends('layouts.apps')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
        <h1 class="jumbotron-heading">{{ $gallery->name }}</h1>
        <p class="lead text-muted">{{ $gallery->description }}</p>
        <p>
        <a href="{{ route('photo-create', $gallery->id) }}" class="btn btn-primary my-2">Upload Photo</a>
            <a href="/" class="btn btn-secondary my-2">Go Back</a>
        </p>
        </div>
    </section>

    @if (count($gallery->photos) > 0)
    <div class="container">

        <div class="row">
            @foreach ($gallery->photos as $photo)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                    <img src="/storage/galleries/{{ $gallery->id }}/{{ $photo->photo }}" alt="{{ $photo->photo }}" height="200px">
                    <div class="card-body">
                    <p class="card-text">{{ $photo->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href="{{ route ('photo-show', $photo->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                        </div>
                    <small class="text-muted">{{ $photo->size }}</small>
                        </div>
                    </div>
                    </div>
                </div>
          @endforeach
        </div>
    @else
        <h3>No Photos yet.</h3>
    @endif
    </div>
@endsection
