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

  <link rel="stylesheet" href="/css/style.css" />

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
            <a class="nav-link active" aria-current="page" href="registration.php">Sign up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar end -->



  <!-- sign in -->
  <section class="Registration overflow-hidden ">
    <div class="container ">
      <div class="row  ">
        <div class="col-lg-6 mt-4  rounded ">
          <div class="card border-0">
            <div class="card-body">
              <div class="card-image">
                <img src="./images/login.jpg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-6 mt-4 shadow-sm rounded">
          <div class="card border-0">
            <div class="card-body">



              <div class="row d-flex mb-4 text-center ">

                <div class=" fs-2 font-oswalt text-center font-color">Sign In</div>
              </div>


              <form class="row " method='post' action='login.php'>

                <div class="col-md-12 ">
                  <label for=" User Name" class="form-label fw-bold">User Name</label>
                  <input type="text" class="form-control" id="User Name" name="user_name" required>
                </div>

                <div class="col-md-12">
                  <label for="Password" class="form-label fw-bold mt-2">Password</label>
                  <input type="password" class="form-control" id="Password" name='user_password' required>
                </div>



                <div class=" col-lg-12 d-grid">
                  <button class="btn bg-banner d-grid text-white mb-2 mt-4" type="submit" name="user_login">Log
                    in</button>
                </div>


                <div class="row">
                  <p class=" "><a href="pass_reset.php" class="text-primary fw-bold text-decoration-none">Forgot
                      Password?</a></p>
                  <p class="col-lg-12 col-sm-12"> don't have account?
                    <a href="registration.php" class="text-primary fw-bold text-decoration-none">Register</a>

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
  <div class="bg-light shadow-sm  overflow-hidden footer_section ">
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


  <!-- user login  -->
  <?php
if(isset($_POST['user_login'])){
    $get_user_name=$_POST['user_name'];
    $get_user_password=$_POST['user_password'];


    $user_select_query="SELECT * FROM user WHERE user_name='$get_user_name' AND user_password='$get_user_password' ";
    $user_result_query=mysqli_query($connection, $user_select_query);

    $admin_select_query="SELECT * FROM admin WHERE A_NAME='$get_user_name' AND A_PASS='$get_user_password' ";
    $admin_result_query=mysqli_query($connection, $admin_select_query);




     if($row=mysqli_fetch_assoc($user_result_query)){
  
      $user_id=$row['user_id'];
      $user_name=$row['user_name'];
      $user_mail=$row['user_mail'];
      $user_gender=$row['user_gender'];
      $user_password=$row['user_password'];
      $user_image=$row['user_image'];
  
      $_SESSION['U_ID']=$user_id;
      $_SESSION['U_name']=$user_name;
      $_SESSION['U_image']=$user_image;
      $_SESSION['U_mail']=$user_mail;
      $_SESSION['U_gender']=$user_gender;
                 
       header('location: /category/all.php');
     }



     else if($row=mysqli_fetch_assoc($admin_result_query)){

       $a_id=$row['A_ID'];
       $a_name=$row['A_NAME'];
       $a_password=$row['A_PASS'];
       $a_image=$row['A_IMAGE'];

    

        $_SESSION['A_ID']=$a_id;
        $_SESSION['A_NAME']=$a_name;
        $_SESSION['A_IMAGE']=$a_image;
        header('location: admin/dashboard.php');
     }

     else{
       
         echo"<p class='text-center text-danger'>Invalid! username or password</p>";
       
     }
    
  

}
?>