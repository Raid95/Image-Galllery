
@extends('back-end\layout\app')

@php 
$mduleName = "Users";
$pageTitle = $mduleName . " Control";
$pageDes = "Here you can add/edit/delete" . $mduleName;
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

<div class="table-responsive">

    <table class="table table-striped table-lg-12">
      
    
     <div class="card"> 
      <div class="card-header card-header-primary">
          
          <div class="col-lg-12">
              <h4 class="card-title"> {{$pageTitle}}</h4>
              <p class="card-category"> {{$pageDes}}</p>

              <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2 text-right">
                      <a href="{{ route('users.create') }}" class="btn btn-info" role="button">
                          Add  {{ $mduleName }}
                      </a>
                  </div>
          </div>
            </div>
      </div>
     </div>
      <thead>
        <tr>
          <th>
            ID
          </th>
          <th>
            Name
          </th>
          <th>
            Email
          </th>
          <th class="th-action text-right">
            Control
          </th>
        </tr></thead>
      <tbody>
        @foreach ($rows as $row)
          <tr>
            <td>
              {{ $row->id }}
            </td>
            <td>
              {{ $row->name }}
            </td>
            <td>
              {{ $row->email }}
            </td>
            <td class="td-action text-right" >
               <a href=""><i style='font-size:12px' class='fas'>&#xf304;</i></a>
                &nbsp;
                <a href=""><i style='font-size:12px' class='fas'>&#xf2ed;</i></a>
                 
            </td>

          </tr>
            
        @endforeach
        
      </tbody>
    </table>
  </div>
    

@endsection
