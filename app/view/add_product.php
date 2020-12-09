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
  <div class="container-fluid pt-5 pb-5">
    <div class="container-fluid w-25">
      <div class="card rounded pt-4 pb-4">
        <div class="card-body">
          <h5 class="my-card_title text-center">Add Product</h5>
          <h6 class="my-card_subtitle text-center">
            Fill your product details
          </h6>
          <div class="container-fluid mt-4">
            <form class="container" enctype="multipart/form-data" method="POST" action="/app/controller/ProductController.php">
              <div class="form-group d-flex justify-content-center mb-5">
                <div style="width: 20rem; height: 20rem" class="rounded-sm p-5 overflow-hidden bg-light border ">
                  <img id="store_img" class="img-fluid" src="/images/goods.png" alt="">
                </div>
              </div>
              <div class="form-group">
                <label for="customFile">Image</label>
                <div class="custom-file">
                  <input required name="img" type="file" class="custom-file-input " id="customFile" onchange="readURL(this);">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <label for="customFile">Product Name</label>
                <input required name="name" type="text" class="form-control " placeholder="Enter Product Name">
              </div>
              <div class="form-group">
                <label for="customFile">Price</label>
                <input required name="price" type="number" class="form-control" placeholder="e.g. 89000">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea name="description" required style="resize: none" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="w-100 btn btn-primary">Add Product</button>
            </form>
          </div>
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