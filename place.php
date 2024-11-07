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
  <title>date</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/styles.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Roboto:wght@300;400;500;900&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}

main {
  position: relative;
  width: calc(min(90rem, 90%));
  margin: 0 auto;
  min-height: 100vh;
  column-gap: 3rem;
  padding-block: min(20vh, 3rem);
}

.bg {
  position: fixed;
  top: -4rem;
  left: -12rem;
  z-index: -1;
  opacity: 0;
}

.bg2 {
  position: fixed;
  bottom: -2rem;
  right: -3rem;
  z-index: -1;
  width: 9.375rem;
  opacity: 0;
}

main > div span {
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: 1rem;
  color: #717171;
}

main > div h1 {
  text-transform: capitalize;
  letter-spacing: 0.8px;
  font-family: "Roboto", sans-serif;
  font-weight: 900;
  font-size: clamp(3.4375rem, 3.25rem + 0.75vw, 4rem);
  background-color: #005baa;
  background-image: linear-gradient(45deg, #005baa, #000000);
  background-size: 100%;
  background-repeat: repeat;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -moz-background-clip: text;
  -moz-text-fill-color: transparent;
}

main > div hr {
  display: block;
  background: #005baa;
  height: 0.25rem;
  width: 6.25rem;
  border: none;
  margin: 1.125rem 0 1.875rem 0;
}

main > div p {
  line-height: 1.6;
}

main a {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  color: #717171;
  font-weight: 500;
  background: #fff;
  border-radius: 3.125rem;
  transition: 0.3s ease-in-out;
}

main > div > a {
  border: 2px solid #c2c2c2;
  margin-top: 2.188rem;
  padding: 0.625rem 1.875rem;
}

main > div > a:hover {
  border: 0.125rem solid #005baa;
  color: #005baa;
}

.swiper {
  width: 100%;
  padding-top: 3.125rem;
}

.swiper-pagination-bullet,
.swiper-pagination-bullet-active {
  background: #fff;
}

.swiper-pagination {
  bottom: 1.25rem !important;
}

.swiper-slide {
  width: 18.75rem;
  height: 28.125rem;
  display: flex;
  flex-direction: column;
  justify-content: end;
  align-items: self-start;
}

.swiper-slide h2 {
  color: #fff;
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.4;
  margin-bottom: 0.625rem;
  padding: 0 0 0 1.563rem;
  text-transform: uppercase;
}

.swiper-slide p {
  color: #dadada;
  font-family: "Roboto", sans-serif;
  font-weight: 300;
  padding: 0 1.563rem;
  line-height: 1.6;
  font-size: 0.75rem;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.swiper-slide a {
  margin: 1.25rem 1.563rem 3.438rem 1.563rem;
  padding: 0.438em 1.875rem;
  font-size: 0.9rem;
}

.swiper-slide a:hover {
  color: #005baa;
}

.swiper-slide div {
  display: none;
  opacity: 0;
  padding-bottom: 0.625rem;
}

.swiper-slide-active div {
  display: block;
  opacity: 1;
}

.swiper-slide--one {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("IMAGES/MOVIE.png") no-repeat 50% 50%/cover;
}

.swiper-slide--two {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("IMAGES/STREETFOODS.png") no-repeat 50% 50%/cover;
}

.swiper-slide--three {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("IMAGES/ARCADE.png") no-repeat 50% 50%/cover;
}

.swiper-slide--four {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("IMAGES/LODGE.png") no-repeat 50% 50%/cover;
}

.swiper-slide--five {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("IMAGES/KARAOKE.png") no-repeat 50% 50%/cover;
}

.swiper-3d .swiper-slide-shadow-left,
.swiper-3d .swiper-slide-shadow-right {
  background-image: none;
}

@media screen and (min-width: 48rem) {
  main {
    display: flex;
    align-items: center;
  }

  .bg,
.bg2 {
    opacity: 0.1;
  }
}
@media screen and (min-width: 93.75rem) {
  .swiper {
    width: 85%;
  }
}                                         
       
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(8, 57, 102);">
    <div class="container px-4">
      <a class="navbar-brand" href="/">
        <span style="color:#ffffff; font-size:26px; font-weight:bold; letter-spacing: 1px;"><?php echo $_SESSION['username']; ?></span>
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

  <main>

    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide--one">
          <div>
            <h2>MOVIE</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut ex in lectus volutpat egestas. Donec vitae elit vel dolor varius scelerisque a in eros. </p>
            <a href="#" target="_blank">explore</a>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--two">
          <div>
            <h2>STREETFOODS</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut ex in lectus volutpat egestas. Donec vitae elit vel dolor varius scelerisque a in eros. 
            </p>
            <a href="#" target="_blank">explore</a>
          </div>
        </div>
  
        <div class="swiper-slide swiper-slide--three">
  
          <div>
            <h2>ARCADE</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut ex in lectus volutpat egestas. Donec vitae elit vel dolor varius scelerisque a in eros. 
            </p>
            <a href="#" target="_blank">explore</a>
          </div>
        </div>
  
        <div class="swiper-slide swiper-slide--four">
  
          <div>
            <h2>Form 4</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut ex in lectus volutpat egestas. Donec vitae elit vel dolor varius scelerisque a in eros. 
            </p>
            <a href="#" target="_blank">explore</a>
          </div>
        </div>
  
        <div class="swiper-slide swiper-slide--five">
  
          <div>
            <h2>Form 5</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut ex in lectus volutpat egestas. Donec vitae elit vel dolor varius scelerisque a in eros. 
            </p>
            <a href="https://en.wikipedia.org/wiki/Dolphin" target="_blank">explore</a>
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
    
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
  <script src="main.js"></script>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>
