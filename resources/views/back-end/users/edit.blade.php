
@extends('back-end\layout\app')

@php 
$mduleName = "User";
$pageTitle = "Edit ". $mduleName;
$pageDes = "Here you can edit" . $mduleName;
@endphp

@section('title')
  {{ $pageTitle }}

@endsection

@section('content')


@component( 'back-end.layout.header' )
  @slot('nav_title')
  {{ $pageTitle }}
  @endslot 
@endcomponent
@csrf
<div class="container">
  <div class="card">
  <div class="card-header card-header-primary">
     <h4 class="card-title">{{ $pageTitle }}</h4>
     <p class="card-category">{{ $pageDes }}</p>
  </div>
<div class="card-body">
    
 
      <form action="{{ route('users.update', ['id' => $row->id]) }}" method="post">
          @csrf 
          @method('put')
  
    
    @include('back-end.users.form')

          <button type="submit" class="btn btn-primary pull-right">Update {{ $mduleName }}</button>
          <div class="clearfix"></div>
    </form>
</div>
</div>
</div>
@endsection
