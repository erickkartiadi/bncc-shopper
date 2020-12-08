<?php
include("config/config.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="/app/view/css/app.css">
  <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@400;700&family=Titillium+Web:wght@300;400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <a class="my_brand navbar-brand font-weight-bold text-uppercase" href="index.html">
      Shopper
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <form class="form-inline">
            <div class="input-group mr-4">
              <input type="text" class="form-control search " placeholder="Search..." aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="input-group-text" id="basic-addon2">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
            <?php
            if ($_SESSION['status'] != "login") {
            ?>
              <a href="app/view/login.php">Sign In</a>
            <?php
            } else {
            ?>

            <?php
            }
            ?>
          </form>
        </li>
      </ul>
      <ul>

      </ul>
    </div>

  </nav>
  <div class="container-fluid p-0">
    <div class="my-image_container">

    </div>
  </div>

  <div class="container mt-5">
    <div class="d-flex align-items-end mb-4 justify-content-between">
      <h1 class="title1 m-0">For You </h1>
      <a class="see_all" href="#">See All</a>
    </div>

    <div class="row mb-4">
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>

    </div>
    <div class="row mb-4">
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>

    </div>
    <div class="row mb-4">
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3">
        <a href="show.html" class="my_card">
          <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2533266/pexels-photo-2533266.jpeg?cs=srgb&dl=pexels-suzy-hazelwood-2533266.jpg&fm=jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-text mb-1">Lorem Ipsum</h5>
              <p class="cart-title text-danger font-weight-bold mb-2">Rp 100.000</p>
              <p class="cart-title font-weight-light mb-1">
                <i class="fas fa-store text-secondary"></i>
                Toko Erick
              </p>
              <p>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star checked"></i>
                <i class="fas fa-star"></i>
                &nbsp;(65)
              </p>
            </div>
          </div>
        </a>

      </div>

    </div>

  </div>
  <footer class="w-100 bg-dark p-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-3 d-flex flex-column">
          <a class="my_brand text-white font-weight-bold text-uppercase" href="index.html">
            Shopper
          </a>
          <span class="text-white-50">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quos soluta harum pariatur! Ducimus,
            ipsa?
          </span>
        </div>
        <div class="col-3 d-flex flex-column">
          <h2 class="footer_title text-white font-weight-bold">
            Learn
          </h2>
          <a class="text-white-50" href="#">
            Blog
          </a>
          <a class="text-white-50" href="#">
            Podcast
          </a>
          <a class="text-white-50" href="#">
            News & Info
          </a>
        </div>
        <div class="col-3 d-flex flex-column">
          <h2 class="footer_title text-white font-weight-bold">
            Other
          </h2>
          <a class="text-white-50" href="#">
            Sponsor Us
          </a>
          <a class="text-white-50" href="#">
            Contribute
          </a>
          <a class="text-white-50" href="#">
            FAQ
          </a>
          <a class="text-white-50" href="#">
            Terms of use
          </a>
          <a class="text-white-50" href="#">
            Support Page
          </a>
        </div>
        <div class="col-3 d-flex flex-column">
          <h2 class="footer_title text-white font-weight-bold">
            Follow Us
          </h2>
          <div class="d-flex">
            <a class="text-white-50 my_icon" href="https://www.instagram.com/erick_kartiadi/">
              <i class="fab fa-instagram "></i>
            </a>
            <a class="text-white-50 ml-2 my_icon" href="https://dribbble.com/erickkartiadi">
              <i class="fab fa-dribbble "></i>
            </a>
            <a class="text-white-50 ml-2 my_icon" href="https://github.com/erickkartiadi">
              <i class="fab fa-github"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
</body>

</html>