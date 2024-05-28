<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UAE's #1 Rolling Shutter Suppliers | Leaders in Roller Shutter Door</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="Galvanized Steel Rolling Shutter Dubai, shop shutter, Insulated Aluminum & Polycarbonate Rolling Shutter Door, High Speed, Rollup & Industrial Doors" name="description">
    <link rel="canonical" href="{{ url()->current() }}">
    <!-- Favicon -->
    <link href="{{ asset('logo/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    @livewireStyles
    @if (isset($schemaData))
    <script type="application/ld+json">
        {!! $schemaData !!}
    </script>
    @endif
</head>


<body>
<style>
    img.logo {
    filter: invert(1);
    margin-bottom: 8px;
}
</style>

    <livewire:user.items.whatsappitems/>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="{{route('home_user')}}"  class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">

            <h2 class="mb-2 text-white">ROLLING SHUTTER</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        $shutters = App\Models\Shutter::get();
        ?>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home_user') }}" class="nav-item nav-link {{ Request::routeIs('home_user') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('service') }}" class="nav-item nav-link {{ Request::routeIs('service') ? 'active' : '' }}">Shutters</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Repair Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        @foreach (  $shutters as $shutter )
                        <a href="{{ route('specific-shutter', ['slug' => Str::slug($shutter->name)]) }}"" class="dropdown-item ">{{$shutter->name}}</a>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-headphones text-primary me-3"></i>+971 55 7474 526</h4>
        </div>

    </nav>
    <!-- Navbar End -->


    {{$slot}}

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Rolling Shutters </h4>

                    @foreach ($shutters->take(5) as $shutter)
                        <a class="btn btn-link" href="{{ route('specific-shutter', ['slug' => Str::slug($shutter->name)]) }}">{{ $shutter->name }}</a>
                    @endforeach

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{route('home_user')}}">Home</a>
                    <a class="btn btn-link" href="{{route('about')}}">About Us</a>
                    <a class="btn btn-link" href="{{route('service')}}">shutters</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Rolling Shutters </h4>
                    @php
                    $latestShutters = $shutters->sortByDesc('created_at')->take(5);
                @endphp

                @foreach ($latestShutters as $shutter)
                    <a class="btn btn-link" href="{{ route('specific-shutter', ['slug' => Str::slug($shutter->name)]) }}">{{ $shutter->name }}</a>
                @endforeach



                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Rolling Shutter</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://mptstech.com/">MPTS TECH</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset("user/lib/wow/wow.min.js")}}"></script>
    <script src="{{asset("user/lib/easing/easing.min.js")}}"></script>
    <script src="{{asset("user/lib/waypoints/waypoints.min.js")}}"></script>
    <script src="{{asset("user/lib/counterup/counterup.min.js")}}"></script>
    <script src="{{asset("user/lib/owlcarousel/owl.carousel.min.js")}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset("user/js/main.js")}}"></script>
    @livewireScripts
</body>

</html>
