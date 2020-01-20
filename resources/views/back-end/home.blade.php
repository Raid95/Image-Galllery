
@extends('back-end\layout\app')

@section('title')
  Home Page

@endsection

@section('content')

@component( 'back-end.layout.header' )
  @slot('nav_title')
    Home Page
  @endslot
   
@endcomponent



@endsection

@push('js')
  <script> 
    alert('welcome');
  </script>
    
@endpush