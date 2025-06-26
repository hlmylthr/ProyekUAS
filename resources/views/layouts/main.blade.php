<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portofolio Saya')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            scroll-padding-top: 70px;
        }
        .section {
            padding: 80px 0;
        }
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .hero {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .nav-link {
            font-weight: 500;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Portofolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Proyek</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    @yield('content')
</div>

<footer>
    <p>&copy; {{ date('Y') }} Nama Kamu. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
