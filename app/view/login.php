<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/app.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@400;700&family=Titillium+Web:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="my-container">
    <div class="my-card_login card rounded pt-4 pb-4">
      <div class="card-body">
        <h5 class="my-card_title text-center">Sign In</h5>

        <div class="container-fluid mt-4">
          <form class="container" action="../../app/controller/LoginController.php" method="POST">
            <div class="form-group">
              <input name="email" type="email" class="form-control my-form_input" placeholder="Email">
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control my-form_input" placeholder="Password">
            </div>
            <button type="submit" class="w-100 btn btn-primary my-form_button">Sign In</button>
          </form>
          <h6 class="my-card_subtitle text-center mt-3">Don't have account?
            <a class="underline" href="signup.php">
              Sign Up
            </a>
          </h6>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
</body>

</html>