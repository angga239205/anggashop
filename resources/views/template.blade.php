<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
  <div class="navbar navbar-expand-lg navbar-dark bg-primary text-white">
    <div class="container-fluid">
       W A R U N G O G A H
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-label=" toggle navigation" aria controls="mynavbar" aria-expended="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="produk" class="nav-link {{ Request::segment(1)=='profil'?'active':'' }}">produkl</a>
                </li>
                <li class="nav-item">
                </li> <li class="nav-item">
                    <a href="user/logout" class="nav-link">keluar</a>
                </li>
            </ul>
        </div>
    </div>
  </div> 
  <div class="container mt-4">
    @yield('content')
  </div> 
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>