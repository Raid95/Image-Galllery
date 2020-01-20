@extends('layouts.apps')

@section('content')
<div class="container">
    <a href="{{ route('video-create') }}" padding= "35px" class="btn btn-info">Upload New Video</a>  
    <br>
    <br>
    
    
        <body>
         <iframe src="http://www.youtube.com/embed/W7qWa52k-nE"
          width="560" height="315" frameborder="0" allowfullscreen></iframe>
        </body>

              

    @if (count($videos) > 0)
        <div class="row">
            @foreach ($videos as $videos)
                 <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">  
                    <img src="/storage/video_covers/{{ $video->link }}" alt="{{ $video->link }}" height="200px">
                    <div class="card-body">
                    <p class="card-text">{{ $video->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href="{!! $videos->video !!}" class="btn btn-sm btn-outline-secondary">View</a>
                        </div>
                    <small class="text-muted">{{ $video->name }}</small>
                        </div>
                    </div>
                    </div>
                </div>
          @endforeach
        </div>
    @else
    <h3>No Videos yet.</h3>
    @endif
    
</div>
@endsection