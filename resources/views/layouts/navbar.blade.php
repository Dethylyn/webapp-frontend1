 <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="assets-homepage/assets/img/final-logo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        @if ( url()->current() ==url("/"))
                            <li class="nav-item"><a class="nav-link" href="#announcements">Announcements</a></li>
                            <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#location">Location</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            <li class="nav-item"><a class="nav-link btn btn-warning" href="{{ url('/login')}}">Login</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ url('/')}}#announcements">Announcements</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/')}}#menu">Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/')}}#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/')}}#location">Location</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/')}}#contact">Contact</a></li>
                            <li class="nav-item"><a class="nav-link btn btn-warning" href="{{ url('/login')}}">Login</a></li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>