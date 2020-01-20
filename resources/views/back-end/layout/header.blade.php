<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-0">
    <a class="navbar-brand col-sm-2 col-md-2 mr-1" href="#">DreamCODE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">{{$nav_title ?? ''}} <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      
      <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
              <a class="nav-link" href="#">Logout</a>
              </li>
        {{$slot}}
          
        </ul>
    </div>
  </nav>








     