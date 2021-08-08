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
            <a class="nav-link active" aria-current="page" href="Login.php">Sign In</a>
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
        <div class="col-lg-7 mt-4  rounded ">
          <div class="card border-0">
            <div class="card-body">
              <div class="card-image">
                <img src="./images/forgot3.jpg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-5 forgot shadow-sm rounded">
          <div class="card border-0">
            <div class="card-body">



              <div class="row d-flex mb-4  ">

                <div class=" fs-2 font-oswalt  font-color mt-4 mb-2">Forgot Password?</div>
              </div>


              <form class="row g-3" method="post" action="pass_reset.php" enctype="multipart/form-data">
                <div class="col-md-12">
                  <label for="Email" class="form-label fw-bold">Enter Your Email</label>
                  <input type="email" name="email" class="form-control" id="Email" required />
                </div>




                <div class="col-lg-12 d-grid ">
                  <button class="btn bg-banner text-white mb-2" type="submit" name="submit">
                    Submit
                  </button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <div class="bg-light shadow-sm  overflow-hidden mt-2 ">
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







  <?php

// include('security.php');
//$connection = mysqli_connect("localhost","root","","billing");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_reset($get_name,$get_email,$token)
{

    $mail = new PHPMailer();
    $mail->IsSMTP();
    // $mail->Mailer = "smtp";
    // $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "ebookbook09@gmail.com";
    $mail->Password   = "ebook12345@";
    
    $mail->IsHTML(true);
    $mail->AddAddress($get_email);
    $mail->SetFrom("ebookbook09@gmail.com",$get_name);
   
    $mail->Subject = "Password Reset Verification";
    $content = " <h5> You have sucessfully reset, your login password </h5><br>
   
   
    <br></br>
    <h3>This your pin</h3>
    <h1>$token</h1>";
    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
      echo "Error while sending Email.";
      var_dump($mail);
    } else {
      echo "Email sent successfully";
    }
}



if(isset($_POST['submit']))
 {
    $email = $_POST['email'];
    $token = rand(10000,99999);
    // $token = md5(rand());


    $check_email = "SELECT user_mail FROM user where user_mail='$email'";
    $check_email_run = mysqli_query($connection,$check_email);

    if(mysqli_num_rows($check_email_run) > 0)
    {
        $row = mysqli_fetch_array($check_email_run);
        $get_name=$row['user_name'];
        $get_email=$row['user_mail'];

        
        $update_token= "UPDATE user SET verify_token=$token where user_mail='$get_email' ";
        $update_token_run = mysqli_query($connection,$update_token);

        if($update_token_run)
        {
            send_password_reset("$get_name","$get_email","$token");
            $_SESSION['status'] = 'Check your mail';
            $_SESSION['status_code'] = 'success';
            // header("Location: password_changed.php?email=$get_email");  
            header( "refresh:5; url=password_changed.php?email=$get_email" ); 
        }
        else{

            $_SESSION['status'] = 'Something went wrong not updated';
            $_SESSION['status_code'] = 'warning';
              
               
        }
        
    }
    else
    {
       
        $_SESSION['status']='No Email Found';
        $_SESSION['status_code']='error';    
        // header('Location: pass_reset.php'); 
                
    }

 }
?>


  <!-- footer -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <!-- js script for carousel and comman -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
<!--end footer -->