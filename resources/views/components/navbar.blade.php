<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid"></i>PETA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('map')}}">Map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('table')}}">Table</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-database"></i>data
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('api.points') }}"
                            target="_blank">Points</a></li>
                            <li><a class="dropdown-item" href="{{route('api.points') }}"
                            target="_blank">Polyline</a></li>
                            <li><a class="dropdown-item" href="{{route('api.points') }}"
                            target="_blank">Polygon</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

