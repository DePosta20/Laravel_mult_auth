<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary m-0">{{ config('app.name') }}</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            @guest
                <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
            @else
                <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
            @endguest

            <a href="#services" class="nav-item nav-link">Service</a>
            <a href="#contact" class="nav-item nav-link">Contact</a>
            @guest
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
            @else
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="booking.html" class="dropdown-item">Booking</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div> --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle hidden-arrow" data-mdb-toggle="dropdown"
                        aria-expanded="false" role="button">
                        {{ Auth::user()->getFullNameAttribute() }}
                    </a>
                    <ul class="dropdown-menu" style="z-index:99999;">
                        <li>
                            <a class="dropdown-item" href="#" id="logout">
                                <i class="ri-logout-box-line"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
        @guest
            <a href="#services" class="btn btn-primary py-2 px-4">Book An Order</a>
        @endguest
    </div>
</nav>
