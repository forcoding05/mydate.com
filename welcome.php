<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Redirect to login if not logged in
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(8, 57, 102);">
    <div class="container px-4">
      <a class="navbar-brand" href="welcome.php">
        <span style="color:#ffffff; font-size:26px; font-weight:bold; letter-spacing: 1px;">hi, <?php echo $_SESSION['username']; ?></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="place.php">Place</a></li>
          <li class="nav-item"><a class="nav-link" href="">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="">About</a></li>
          <li class="nav-item"><a class="nav-link" href="">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="row">
              <div id="carouselId" class="carousel slide" data-bs-ride="carousel" >
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                  <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                  <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img src="https://i.pinimg.com/564x/94/87/e1/9487e16ef80930fb10091b69ea4a9551.jpg" class="w-100 d-block" alt="First slide"  style="height: 500px;;">
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.pinimg.com/564x/15/1b/1f/151b1f794388ae4d880bb14100b63406.jpg" class="w-100 d-block" alt="Second slide"  style="height: 500px;;">
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.pinimg.com/564x/5f/45/c7/5f45c7617c4a3d905af2aeb0b8a14a3d.jpg" class="w-100 d-block" alt="Third slide"  style="height: 500px;">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
          </div>
        </div>
        <div>
          <div class="row justify-content-center" style="text-align: center; margin: 50px;">
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas suscipit tristique libero,
               vel imperdiet turpis pellentesque vel. Vestibulum mollis hendrerit nisi, sed consectetur nunc mattis at. Nulla in lacinia lacus.
               Morbi venenatis, nisl eu mollis accumsan, velit velit placerat velit, ut congue est enim vel quam. 
               Duis luctus diam eu purus fermentum ultricies. Sed feugiat gravida justo, id tristique sapien tristique in. 
               Nullam eu lectus vitae quam rutrum scelerisque. Sed vel mauris non enim tempor placerat sed sit amet velit.
               Aliquam in libero vel nulla malesuada tincidunt vitae ac tellus. Donec sed faucibus turpis. 
               Integer pharetra dolor eget elit cursus tristique.
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas suscipit tristique libero,
               vel imperdiet turpis pellentesque vel. Vestibulum mollis hendrerit nisi, sed consectetur nunc mattis at. Nulla in lacinia lacus.
               Morbi venenatis, nisl eu mollis accumsan, velit velit placerat velit, ut congue est enim vel quam. 
               Duis luctus diam eu purus fermentum ultricies. Sed feugiat gravida justo, id tristique sapien tristique in. 
               Nullam eu lectus vitae quam rutrum scelerisque. Sed vel mauris non enim tempor placerat sed sit amet velit.
               Aliquam in libero vel nulla malesuada tincidunt vitae ac tellus. Donec sed faucibus turpis. 
               Integer pharetra dolor eget elit cursus tristique.
            </p>
          </div>
        </div>
      </div>
    </div>

    <p>You are successfully logged in.</p>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>

