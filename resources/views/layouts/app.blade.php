<!DOCTYPE html>
<html>
<head>
    @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.search')
    @include('layouts.partials.navbar')

  
    @yield('content')


        @include('layouts.partials.footer')
 
    
      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    
        @include('layouts.partials.javascripts')
    </body>
</html>
