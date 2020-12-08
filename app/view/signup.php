<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/app.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@400;700&family=Titillium+Web:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="my-container">
    <div class="my-card_signup card rounded pt-4 pb-4">
      <div class="card-body">
        <h5 class="my-card_title text-center">Create an account</h5>
        <h6 class="my-card_subtitle text-center">Already have an account?
          <a class="underline" href="/login.html">
            Sign In</a>
        </h6>
        <div class="container-fluid mt-4">
          <form class="container" method="POST" action="/app/controller/SignupController.php">
            <div class="row">
              <div class="form-group col-6 pr-1">
                <input name="first_name" type="text" class="form-control my-form_input" placeholder="First Name">
              </div>
              <div class="form-group col-6 pl-1">
                <input name="last_name" type="text" class="form-control my-form_input" placeholder="Last Name">
              </div>
            </div>
            <div class="form-group">
              <input name="email" type="email" class="form-control my-form_input" placeholder="Email">
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control my-form_input" placeholder="Password">
            </div>
            <button type="submit" class="w-100 btn btn-primary my-form_button">Sign Up</button>
            <div class="form-check mt-2">
              <input type="checkbox" class="form-check-input" id="agreement">
              <label class="form-check-label" for="agreement">I have read and agree to the <a href="#">Terms of
                  Service</a></label>
            </div>
          </form>
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