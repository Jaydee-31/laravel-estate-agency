<!-- ======= Header/Navbar ======= -->
  
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
            </button>
            <a class="navbar-brand text-brand" href="{{ route('home') }}"><span class="color-c">JM</span>Estate<span class="color-b">Agency</span></a>
        
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
            
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
            
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
            
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('property') ? 'active' : '' }}" href="{{ route('property') }}">Property</a>
                    </li>
            
                    <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                    
                </ul>
            </div>
        
            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
            <i class="bi bi-search"></i>
            </button>
            {{-- <a class="nav-link text-uppercase" href="{{ route('admin.properties.index') }}">Admin</a> --}}
        </div>
        </nav>