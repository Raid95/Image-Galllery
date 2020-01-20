@extends('layouts.apps')

@section('content')
    <div class="container">

        <h3> {{ $video->title }} </h3>
        <p> {{ $video->description }} </p> 

                <form action="{{ route('video-destroy', $video->id) }}" method="post">

                @csrf
                @method('DELETE')
           
                <button type="submit" name="button" class="btn btn-danger float-right delete">Delete</button>
          
                </form>
        
        <a href="{{ route('video-show', $video->id) }}" class="btn btn-info">Go Back</a>
        <small>Size: {{ $video->size }} </small>
        <hr>
        <img src="/storage/videos/{{ $video->video_id }}/{{ $video->video }}" alt="{{ $video->video }}" max width="990px">
        <hr>
    </div>

@endsection