<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" href="/">Gallery</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link {{ Request::is('/video') ? 'active' : '/video'}}" href="{{ route('video-index')}}">Video</a>
                    </li>   
            </ul>
        </div>
    </nav>
    