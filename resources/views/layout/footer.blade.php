<nav class="navbar navbar-expand-lg bg-primary fixed-bottom rounded-bottom" style="border-radius: 10rem">
    <div class="container-fluid">
        <ul class="navbar-nav navbar-icons d-flex flex-row mx-auto">
            <li class="navbar-item"> 
                <a class="nav-link" href="{{ route('pages.events.index') }}">
                    <button type="button" class="btn btn-primary btn-lg {{ request()->path() == 'events' ? 'active' : '' }}" >
                        <i class="link-icon feather-32" data-feather="globe"></i>
                    </button>
                </a>
            </li>
            <li class="navbar-item">
                <a class="nav-link" href="{{ route('pages.mapview.index') }}"> 
                    <button type="button" class="btn btn-primary btn-lg {{ request()->path() == 'mapview' ? 'active' : '' }}" >
                        <i class="link-icon feather-32" data-feather="map-pin"></i>
                    </button>
                </a>
            </li>
            <li class="navbar-item"> 
                <a class="nav-link" href="{{ route('pages.events.index') }}"> 
                    <button type="button" class="btn btn-primary btn-lg" >
                        <i class="link-icon feather-32" data-feather="send"></i>
                    </button>
                </a>
            </li>
            <li class="navbar-item"> 
                <a class="nav-link" href="{{ route('pages.events.index') }}"> 
                    <button type="button" class="btn btn-primary btn-lg" >
                        <i class="link-icon feather-32" data-feather="share-2"></i>
                    </button>
                </a>
            </li>
            <li class="navbar-item"> 
                <a class="nav-link" href="{{ route('pages.events.index') }}"> 
                    <button type="button" class="btn btn-primary btn-lg" >
                        <i class="link-icon feather-32" data-feather="user"></i>
                    </button>
                </a>
            </li>
        </ul>
    </div>
</nav>