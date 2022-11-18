<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand logo" href="{{ route('home') }}">
            {{-- My<span>Website</span> --}}
             <img src="{{ asset('uploads/'. $global_setting_data->logo) }}" alt=""> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? "active" : "" }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? "active" : "" }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('services') ? "active" : "" }}" href="{{ route('service') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('portfolios') ? "active" : "" }}" href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('posts') ? "active" : "" }}" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? "active" : "" }}" href="{{ route('contact') }}">Contact</a>
                </li>
                <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
