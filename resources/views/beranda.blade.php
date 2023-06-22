<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"style="background-color:chocolate;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Angga Saeful Azhar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Shop
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> -->
        </ul>
        <button class="btn btn-outline-dark">
            <i class="bi bi-cart-2"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg> cart
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
                <path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99Z"/>
              </svg>
        </button>
        
        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>
  <!--Home-->
  <section id="Home" class="pt-5">
    <div class="container-fluid p-0">
      <div class="text-light text-center p-5">
        <img src="img/jogja scrummy.png" alt="Logo"width="300" height="300">
          <h2 class="fw-bold mt-3"></h2>
          <p class="fw-bold fs-5" mt-2></p>
          <!-- <a href="shop.item.html" class="btn btn-outline-primary"></a> -->
      </div>

      <!--Akhir Home-->
</section>
<section>
  <div class="container pt-4 px-1">
    <div class="row justify-content-center">
      @foreach ($produk as $item)
      <div class="col col-md-4 mb-5 text-center">
        <div class="card mt-5 ms-4" style="width: 18rem;">
          <img src="/storage/{{$item->foto}}" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">{{ $item->nama_produk }}</h5>
          <span class="text-decoration-line-through">Rp. {{number_format($item->harga)}}</span>
          Rp.321
          <!-- <p class="card-text">Rp.10.000-20.000</p> -->
          <a href="produk/detail/{{$item->id}}" class="btn btn-primary">Beli sekarang</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
 <!--Akhir Contact Me-->
 <!--akhir contact me-->
 <div class="container-fluid">
  <footer class="py-3 my-3 border-top">
    <p class="text-center">&copy;2023 <a href="" class="fw-bold text-decoration-none">Angga saeful azhar</a></p>

  </footer>

</div>
        
 <!-- <div class="conainer-fluid">
  <footer class="py-3 my-3 border-top">
    <p class="text-center">&copy; 2023 <a href ="https://www.instagram.com/xxx" target="_blank" class="fw-bold text-decoration-none">LISTIA AULIA</a></p>
  </footer>
</div> -->
</body>
</html>
