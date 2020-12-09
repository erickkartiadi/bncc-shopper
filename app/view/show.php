<?php
include("../../config/config.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/app.css">
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
          </form>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <?php
        if (
          empty($_SESSION['status'])
        ) {
        ?>
          <a href="/app/view/login.php">Sign In</a>
        <?php
        } else {
          $query = "SELECT * FROM shop WHERE user_id={$_SESSION['user_id']}";
          $store = mysqli_query($conn, $query);
          $check = mysqli_num_rows($store);
          $data = mysqli_fetch_array($store);
        ?>
          <li class="nav-item dropdown mr-3">
            <a style="cursor: pointer;" class="nav-link" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="d-flex align-items-center">
                <div class="mr-3 rounded-circle p-1 bg-light border" style="width: 2.5rem; height:2.5rem; overflow: hidden">
                  <img src="<?= $check > 0 ? $data["image_url"] : "/images/store.png" ?>" class=" z-depth-0 img-fluid mr-2" alt="avatar image">
                </div>
                <span class="text-capitalize">
                  <?= $check > 0 ?  $data['name'] : "Store" ?>
                </span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-info ml-n5" aria-labelledby="navbarDropdownMenuLink-4">
              <div style="width: 17rem" class="pl-3 pr-3 pt-1 pb-1 d-flex flex-column justify-content-center">
                <?php
                if ($check <= 0) {
                ?>
                  <p class="text-center">You don't have a shop yet</p>
                  <a class="btn btn-primary" href="/app/view/register_shop.php">Open Shop</a>
                <?php
                } else {
                  $_SESSION['shop_id'] = $data['id'];
                ?>
                  <a class="btn btn-link mt-n2" href="/app/view/shop.php?shop_id=<?= $_SESSION['shop_id'] ?>">View Your Products</a>
                  <a class="btn btn-success" href="/app/view/add_product.php">Add Product</a>
                <?php
                }
                ?>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a style="cursor: pointer;" class="nav-link" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img style="width: 2.5rem" src="/images/user.png" class="rounded-circle z-depth-0 img-fluid mr-2" alt="avatar image">
              <span><?= $_SESSION["full_name"] ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="#">My account</a>
              <a class="dropdown-item" href="/app/controller/LogoutController.php">Log out</a>
            </div>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>

  </nav>
  <?php
  $query = "SELECT shop.name AS shop_name, product.* FROM product INNER JOIN shop ON shop.id = product.shop_id WHERE product.id = {$_GET['id']}";
  $product = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($product);
  ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-5">
        <div class="card">
          <img class="card-img-top" src="<?= $data['image_url'] ?>" alt="Card image cap">
        </div>
      </div>
      <div class="col-7">
        <div class=" d-flex flex-column">
          <p class="cart-title font-weight-light mb-1">
            <i class="fas fa-store text-secondary"></i>
            <?= $data['shop_name'] ?>
          </p>
          <h2 class="card-text mb-1 font-weight-bold mb-2"><?= $data['name'] ?></h2>
          <p>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star"></i>
            &nbsp;(<?= $data['sold'] ?>)
          </p>
          <h2 class="cart-title text-danger font-weight-bold mb-2"><?= "Rp " . number_format($data['price'], 2, ',', '.') ?>0</h2>
          <p>
            <?= $data['description'] ?>
          </p>
        </div>
      </div>
    </div>
    <div class="mt-5">
      <h1 class="title1 m-0 mb-5">Review</h1>
      <div class="row">
        <div class="col-3 row">
          <div class="col-4">
            <img class="img-fluid" src="/images/user.png" alt="">
          </div>
          <div class="col-8">
            <span class="user_review">Erick</span>
            <br>
            <span class="user_review_time">Today</span>
          </div>
        </div>
        <div class="col-9">
          <p>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star"></i>
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi nostrum dolorum ex nesciunt recusandae
            numquam beatae atque libero odit iste, molestiae illo quam delectus. Rem?
          </p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-3 row">
          <div class="col-4">
            <img class="img-fluid" src="/images/user.png" alt="">
          </div>
          <div class="col-8">
            <span class="user_review">Tomi</span>
            <br>
            <span class="user_review_time">Yesterday</span>
          </div>
        </div>
        <div class="col-9">
          <p>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
            <i class="fas fa-star checked"></i>
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi nostrum dolorum ex nesciunt recusandae
            numquam beatae atque libero odit iste, molestiae illo quam delectus. Rem?
          </p>
        </div>
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


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
  </script>
</body>

</html>