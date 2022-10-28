<div id="navbarWrapper" class="container sticky-wrapper">
    <nav class="navbar navbar-dark bg-dark p-3 navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="{{route('welcome')}}"><img src="images/logo-white.png" alt="" height="40px" width="auto"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Chiara Bonetti</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul id="myNav" class="navbar-nav justify-content-end flex-grow-1 pe-0">
                        <li class="nav-item">
                            <a id="linkHome" class="nav-link" href="{{route('welcome')}}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Work
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item text-reset" href="{{route('ilTubo')}}">Il tubo</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('insicureStabilita')}}">In-sicure stabilità</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a id="linkCubo" class="dropdown-item text-reset" href="{{route('ilCubo')}}">Il cubo</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('insideTheOutside')}}">Inside the outside</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('theBelly')}}">The belly</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('theSign')}}">The sign</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('mirrors')}}">Mirror/s</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a id="linkLateralmente" class="nav-link" href="{{route('lateralmente')}}">Exhibition</a>
                        </li>
                        <li class="nav-item">
                            <a id="linkAbout" class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>