
<div class="container fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Devdocumentor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li> --}}
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Projects
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($menuProjects as $i => $project)
                        <a class="dropdown-item" data-key={{$i}} href="{{url($project->slug)}}">{{$project->name}}</a>
                    @endforeach
                </div>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{url('/')}}">
                <input class="form-control mr-sm-2" name="s" type="search" placeholder="Search" aria-label="Search" value="{{$s}}">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
            @if($user)
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('admin')}}">Administrate</a>
                        <form action="{{url('admin/logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
            @else
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('admin')}}">Log in</a>
                </li>       
            </ul>
            @endif
        </div>
    </nav>
</div>