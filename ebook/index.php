<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/style.css" />
  <title>Ebook</title>
</head>

<body>

  <!-- navigation  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-banner shadow-sm fixed-top ">
    <div class="container-fluid">
      <!-- <img src="./images/logo2 (2).png" class="img-fluid img-size" alt=""> -->
      <!-- <a class="navbar-brand " href="#"><span class="font-oswalt text-white fs-3">e-book</span></a>  -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about_us">About Us</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact Us</a>
          </li>
        </ul>

        <ul class="navbar-nav">
          <li class=" nav-item ">
            <a class=" nav-link bg-pink px-5 text-white rounded-pill " href=" login.php">Login</a>
          </li>
        </ul>


      </div>
    </div>
  </nav>
  <!--end navigation  -->





  <!-- banner section -->

  <section id="banner" class="d-flex align-items-center bg-front pt-5  ">
    <div class="container">
      <!-- <img src="./images/logo2 (2).png" class="img-fluid img-size" alt=""> -->
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-3 pt-lg-0  order-2 order-lg-1  ">
          <h1 class="text-white fw-bold text-space">
            Welcome to <span class=" font-oswalt color-pink"> E-BOOK</span>
          </h1>
          <h4 class="text-quote mt-2">
            “Education is the only thing that cannot be taken away. It is the
            key to fulfilling my dreams.”
          </h4>
          <div class="d-flex justify-content-center justify-content-lg-start ">
            <a href="login.php" class="btn  btn-banner mt-4 mb-1 fw-bold">Read Book</a>
          </div>
        </div>
        <div class="col-lg-6 order-1  order-lg-2 col-sm-6 pt-3" data-aos="zoom-in" data-aos-delay="200">
          <img src="./images/hero-img.png" class="img-fluid animated pt-3 mb-5 mb-sm-5" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- end banner section -->




  <!-- about us -->
  <section  id="about_us">

    <div class="card border-0 about-us ">

      <div class=" text-center section-title    ">
        <h1 class="mt-3 pt-3 font-oswalt font-color">About us</h1>
      </div>

      <div class="container mt-4">
        <div class="row">
          <div class="col-lg-5 text-start order-0    ">
            <img src="images/vector4.jpg" class="img-fluid rounded" alt="">
          </div>
          <div class="col-lg-7 mt-4  ">
            <h5 class="p-font fw-bold text-secondary ">Books are important for the mind, heart, and soul. But don’t take
              it from us These quotes about reading speak for themselves.</h5><br>
            <h5 class="p-font fw-bold text-secondary ">Stefanie Hargreaves The power to be found between the pages of a
              book is formidable, indeed. </h5><br>
            <h5 class="p-font fw-bold text-secondary ">these 50 inspiring quotes about books and reading are here to
              remind you of that. For, as author Anna Quindlen says, “Books are the plane, and the train, and the road.
              They are the destination, and the journey. They are home.</h5>
          </div>
        </div>
      </div>







    </div>

  </section>
  <!--end about us -->


  <!-- latest book -->
  <section id="latest_book" class=" section-title latest-book">
    <h1 class="text-center font-oswalt font-color ">Our Latest Books</h1>
    <div class="container books-margin ">
      <div class="row ">
        <div class="col-lg-3">
          <div class="card border-0 shadow-sm img-redious  ">
            <img src="/images/juliuscaesar.jpg " class="card-img-top img-fluid img-redious" alt="...">
            <div class="card-body">
              <h5 class="card-title font-oswalt text-center">The Spicy of Venice</h5>
              <p class="card-text py-2 text-center text-secondary">Some quick example text to build on the card title
                quick </p>

            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card border-0 shadow-sm img-redious">
            <img src="/images/alex.jpg " class="card-img-top img-fluid img-redious" alt="...">
            <div class="card-body">
              <h5 class="card-title font-oswalt text-center">The Spicy of Venice</h5>
              <p class="card-text py-2 text-center text-secondary">Some quick example text to build on the card title
                quick </p>

            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card border-0 shadow-sm img-redious">
            <img src="/images/The spy of venice.jpg " class="card-img-top img-fluid img-redious" alt="...">
            <div class="card-body">
              <h5 class="card-title font-oswalt text-center">The Spicy of Venice</h5>
              <p class="card-text py-2 text-center text-secondary">Some quick example text to build on the card title
                quick </p>

            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card border-0 shadow-sm img-redious">
            <img src="/images/juliuscaesar.jpg " class="card-img-top img-fluid img-redious" alt="...">
            <div class="card-body">
              <h5 class="card-title font-oswalt text-center">The Spicy of Venice</h5>
              <p class="card-text py-2 text-center text-secondary">Some quick example text to build on the card title
                quick </p>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end latest book -->




  <!-- card section -->
  <section id="card_section" class="  why_we    ">
    <div class="section-title">
      <h1 class="text-center py-3 mb-4 fw-bold font-oswalt font-color ">Ours</h1>
    </div>
    <div class="container pb-4   ">
      <div class="row justify-content-center ">


        <div class="col-lg-4 text-center ">
          <div class="card  border-0  mb-3">
            <div class="card-body ">
              <img src="images/s1.jpg" class="img-fluid borders" height="400px" width="400px" alt="">
            </div>
          </div>
          <p class="fw-bold fs-4 font-oswalt ">STUDYING</p>
        </div>

        <div class="col-lg-4 text-center">
          <div class="card border-0  mb-2">
            <div class="card-body">
              <img src="images/s2.png" class="img-fluid borders" alt="">
            </div>
          </div>
          <p class="fw-bold fs-4 font-oswalt ">LEARNING</p>
        </div>

        <div class="col-lg-4 text-center">
          <div class="card border-0  mb-2">
            <div class="card-body">
              <img src="images/s3.jpg" class="img-fluid borders" alt="">
            </div>
          </div>
          <p class="fw-bold fs-4 font-oswalt ">KOWLEDGE</p>
        </div>


      </div>
    </div>

  </section>
  <!--end  card section -->









  <!-- footer -->
  <footer class=" footer-area " id="footer">
    <div class="container text-white">
      <div class="row ">

        <div class="col-lg-4 mt-4">
          <div class="image-ebook">
            <h4 class=" mb-3 fw-bold font-oswalt">E-Book</h3>
              <img src="images/b3.png " height="200px" width="300px" class="img-fluid" alt="">


          </div>

        </div>

        <div class="col-lg-4 mt-4">
          <div class="contact" id="4">
            <h4 class="mb-5 fw-bold font-oswalt">Contact Us</h4>
            <div class="contacts  ">
              <h6 class="fw-bold text-secondary"><span class="me-3"><i class="bi bi-geo-alt"></i></span>online E-book,
                Srilanka</h6><br>
              <h6 class="fw-bold text-secondary"><span class="me-3"><i class="bi bi-telephone"></i></span>+94-779878560
              </h6><br>
              <h6 class="fw-bold text-secondary"><span class="me-3"><i class="bi bi-envelope"></i></span>ebook@gmail.com
              </h6><br>
              <div class=" social-icon ">
                <span class="user fs-4 text-primary  me-4"><i class="bi bi-facebook"></i></span>
                <span class="user fs-4 text-info me-4"><i class="bi bi-twitter"></i></i></span>
                <span class="user fs-4 text-danger"><i class="bi bi-google"></i></i></span>
              </div>
            </div>

          </div>

        </div>


        <div class="col-lg-4 mt-4">
          <h4 class="mb-4 fw-bold font-oswalt ms-3">Navigation</h4>
          <ul class="nav flex-column ">
            <li class="nav-item ">
              <a class="nav-link fw-bold text-secondary" href="#banner">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold text-secondary" href="#about_us">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold text-secondary" href="#footer">Contact Us</a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link fw-bold text-secondary" href="registration.php">Sign Up</a>
            </li>
            </li>
          </ul>

          <div class="find_us">
            <div class="icons">



            </div>


          </div>



        </div>






      </div>

      <div class="copy text-center text-secondary  ">
        <h6 class=" mt-3 mb-3 py-5">Copyright © 2021 All rights reserved| This is made by CIS</h6>

      </div>



    </div>










  </footer>
  <!-- end footer -->




  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>


</body>

</html>