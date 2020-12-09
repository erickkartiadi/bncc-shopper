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

  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#store_img')
            .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
</head>

<body>
  <div class="my-container">
    <div class=" card rounded pt-4 pb-4">
      <div class="card-body">
        <h5 class="my-card_title text-center">Open Shop</h5>
        <h6 class="my-card_subtitle text-center">
          Fill your shop details
        </h6>
        <div class="container-fluid mt-4">
          <form class="container" enctype="multipart/form-data" method="POST" action="../controller/ShopController.php">
            <div class="form-group d-flex justify-content-center mb-5">
              <div style="width: 20rem; height: 20rem" class="rounded-circle p-5 overflow-hidden bg-light border ">
                <img id="store_img" class="img-fluid" src="../../images/store.png" alt="">
              </div>
            </div>
            <div class="form-group">
              <div class="custom-file">
                <input name="img" type="file" class="custom-file-input " id="customFile" onchange="readURL(this);">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
            <div class="form-group">
              <input required name="name" type="text" class="form-control " placeholder="Shop Name">
            </div>
            <div class="form-group">
              <input required name="location" type="text" class="form-control " placeholder="Location">
            </div>

            <button type="submit" class="w-100 btn btn-primary">Open Your Shop</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==">
    < script src = "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin = "anonymous" / >
  </script>
</body>

</html>