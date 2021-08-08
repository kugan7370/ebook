<?php include 'dp.php';
ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- boostrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

  <link rel="stylesheet" href="css/style.css" />

  <title>Register</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-banner">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav  mb-2 mb-lg-0 me-2 ms-auto">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar end -->



  <!-- sign in -->
  <section class="Registration overflow-hidden">
    <div class="container ">
      <div class="row  ">
        <div class="col-lg-6 mt-4  rounded ">
          <div class="card border-0">
            <div class="card-body">
              <div class="card-image">
                <img src="./images/login2.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-6 mt-4 shadow-sm rounded">
          <div class="card border-0">
            <div class="card-body">
             
              <div class="row d-flex mb-4 text-center ">
                <div class=" fs-2 font-oswalt text-center font-color">Sign Up</div>         
              </div>

              <?php

// if(isset($_POST['check_submit_btn'])){
//   $email=$_POST['email_id'];

// $select_email="SELECT * FROM user where user_mail='$email'";
// $select_result=mysqli_query($connection,$select_email);

//   if(mysqli_num_rows($select_result)>0){
//     echo 'email already exits. please try another.';
//   }
//   else{
//     echo "it is abailable";
//   }


// }


?>


              <form class="row g-3 mt-4 check_form" autocomplete="off"  method="post" action="registration.php" enctype="multipart/form-data">
                <div class="col-md-6">
                  <label for="username" class="form-label fw-bold">User name</label>
                  <input type="text" name="user_name" class="form-control checking_username" id="username"  />
                  <small class="message_User_name fw-bold"> </small>
                </div>

                <div class="col-md-6 check1">
                  <label for="user_mail" class="form-label fw-bold ">E-Mail</label>
                  <input type="email" name="user_mail" class="form-control checking_mail"   />
                  <small class="message_email fw-bold"> </small>
                </div>

                <div class="col-md-6">
                  <label for="user_password" class="form-label fw-bold">Password</label>
                  <input type="password" class="form-control checking_password" id="password" name="user_password"  />
                  <small  class="message_pass  fw-bold"> </small>
                </div>
                <div class="col-md-6">
                  <label for="confirm_password" class="form-label fw-bold ">Confirm Password</label>
                  <input type="password" class="form-control checking_confirm_password" id="confirm_password"  name="user_confirm_password"  />
                  <small  class="message_confirm_pass  fw-bold"> </small>
                </div>

                <div class="col-md-6 ">
                  <label for="user_gender" class="form-label  fw-bold">Gender</label>
                  <div class="d-flex">
                    <div class="form-check me-4  ">
                      <input class="form-check-input check_gender " type="radio" name="usergender"  value="Male">
                      <label class="form-check-label" for="Male">
                        Male
                      </label>
                    </div>
                    <div class="form-check ms-4 ">
                      <input class="form-check-input check_gender " type="radio" name="usergender" value="Female" >
                      <label class="form-check-label" for="Female">
                        Female
                      </label>
                    </div>
                  </div>
                  <small  class="message_gender  fw-bold"> </small>
                </div>

                <div class="col-md-7">
                  <div class="form-check">
                    <input class="form-check-input check_agree" type="checkbox" value="" name="agree" >
                    <label class="form-check-label fw-bold" for="invalidCheck2">
                      Agree to terms and conditions
                    </label>
                  </div>
                  <small  class="message_agree  fw-bold"> </small>
                </div>

                <div class="col-lg-12 d-grid">
                  <button class="btn bg-banner register text-white mb-2 "  id="submit" type="submit" name="register">
                    Register
                  </button>
                </div>
                <div class="row">
                  <p class="col-lg-12 col-sm-12">
                    Allready have account?
                    <a href="login.php" class="text-primary fw-bold text-decoration-none">Sign in</a>
                  </p>
                </div>

              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- footer -->
  <div class="bg-light shadow-sm  overflow-hidden mt-3 ">
    <div class="row px-3 bg-banner text-white text-center p-3">
      <small class="mb-1">Copyright © 2021 All rights reserved| This is made by CIS</small>
      <div class="social-contact ml-4 ml-sm-auto">
        <span class="fa fa-facebook mr-4 text-sm"></span>
        <span class="fa fa-google-plus mr-4 text-sm"></span>
        <span class="fa fa-linkedin mr-4 text-sm"></span>
        <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
      </div>
    </div>
  </div>
  <!-- end sign -->









  <!-- php for insert database -->
  <?php
if (isset($_POST['register'])) {
    $get_user_name = $_POST['user_name'];
    $get_user_password =md5($_POST['user_password']); 
    $get_user_mail = $_POST['user_mail'];
    $get_user_gender = $_POST['usergender'];
    $get_user_image = 'pro_pic.jpg';

   
    

        $insert_query = "INSERT INTO user (user_name, user_gender, user_mail, user_image, user_password) VALUES('$get_user_name', '$get_user_gender', '$get_user_mail', '$get_user_image', '$get_user_password')";
        $insert_result = mysqli_query($connection, $insert_query);

        if ($insert_result) {
         
            $_SESSION['status'] = 'Successfully Registered';
            $_SESSION['status_code'] = 'success';
            
            header( "refresh:5; url=login.php" );
        } else {
         
            $_SESSION['status'] = 'Not Registered';
            $_SESSION['status_code'] = 'error';
            // header('location: registration.php');

        }
    
    
}
?>
  <!-- end php for insert database -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- js script for carousel and comman -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- owl carousel js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
  <script src="js/validation.js"></script>
   


<!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- sweet alert php -->
<?php

if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
  ?>
  <script>
  swal({
    title: "<?php echo $_SESSION['status']; ?>",
    /* text: " ",*/
    icon: "<?php echo $_SESSION['status_code']; ?>",
    button: "Ok done!",
  });
  </script>
  <?php
  unset($_SESSION['status']);
}
  ?>
<!--end  sweet alert php -->







</body>

</html>