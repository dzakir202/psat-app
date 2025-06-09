<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home')}}"><img src="{{ asset('image/Logo.png') }}" alt="Logo Chevilly" class="img1 mx-2"> Chevilly Resort & Camp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav fw-bold">
                    <li class="nav-item"><a class="nav-link" href="{{ route('tentang')}}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('galeri')}}">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>
    <footer class="footer pt-5" id="kontak">
        <div class="container d-flex flex-wrap justify-content-between">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Chevilly Resort & Camp
                </h6>
                <p>
                    Chevilly Resort & Camp adalah tempat wisata keluarga di Bogor dengan suasana alam sejuk, glamping, wahana seru, dan spot foto menarik. Cocok untuk liburan dan gathering.
                </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    Media Social
                </h6>
                <p>
                    <a href="#" class="text-white"><i class="fab fa-facebook mx-2"></i>Facebook</a>
                </p>
                <p>
                    <a href="#" class="text-white"><i class="fab fa-twitter mx-2"></i>Twitter</a>
                </p>
                <p>
                    <a href="#" class="text-white"><i class="fab fa-instagram mx-2"></i>Instagram</a>
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3"></i> Jl. Raya Veteran III, Ciawi, Bogor</p>
                <p>
                    <i class="fas fa-envelope me-3"></i>
                    @gmail.com
                </p>
                <p><i class="fas fa-phone me-3"></i> +62 8119 2022 76
            </div>
        </div>
        <div class="footer-bottom mt-4">
            <p>&copy; 2025. Website Company Profile Chevilly Resort & Camp</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script>
</body>

</html>
