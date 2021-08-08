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

  <title>User Login</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-banner overflow-hidden">
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
            <a class="nav-link  text-white" href="login.php">Sign in</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar end -->







  <!-- php for sign -->








  <!-- sign in -->
  <section class="login overflow-hidden">
    <div class="container ">
      <div class="row  ">
        <div class="col-lg-6 mt-4  rounded ">
          <div class="card border-0">
            <div class="card-body">
              <div class="card-image">
                <img src="./images/change.png" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-6 mt-4 shadow-sm rounded">
          <div class="card-body">



            <div class="row d-flex mb-4 text-center ">

              <div class=" fs-2 font-oswalt text-center font-color">Reset Password</div>
            </div>
            <!-- multi login   -->

            <?php       
               if(isset($_GET['email'])){
                                  // $reset_get_token=$_GET['token'];
                                  $reset_get_mail=$_GET['email'];
                                  
               }
               
?>

            <form class="row g-3" method="post" action="password_changed.php?email=<?php echo$reset_get_mail; ?>">

              <div class="col-md-12">
                <label for="Tokan" class="form-label fw-bold">Enter your Pin</label>
                <input type="text" class="form-control" id="token" name="token" placeholder="check your mail" required>

              </div>


              <div class="col-md-12">
                <!-- <label for="username" class="form-label fw-bold" >Email</label> -->
                <input type="hidden" name="email" class="form-control" id="username"
                  value="<?php echo$reset_get_mail; ?>" required />
              </div>


              <div class="col-md-12">

                <label for="password" class="form-label fw-bold">New Password</label>
                <input type="password" class="form-control" id="password" name="new_password" required />
              </div>

              <div class="col-md-12">

                <label for="Confirm_Password" class="form-label fw-bold">Confirm Password</label>
                <input type="password" class="form-control" id="Confirm_Password" onkeyup="checke(this)" name="Confirm_Password" required />
                <small id="alret" class="text-danger fw-bold"> </small>
              </div>

              <div class="col-12 d-grid ">

                <button class="btn bg-banner text-white mb-2" type="submit" name="update_password">
                  Reset Password
                </button>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <div class=" shadow-sm  overflow-hidden  reset_footer ">
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










  <!-- update query -->
  <?php 

if(isset($_POST['update_password'])){
    
    $get_update_mail=$_POST['email'];
    $get_update_new_password=$_POST['new_password'];
    $get_update_Confirm_Password=$_POST['Confirm_Password'];
    $get_update_token=$_POST['token'];

  if($get_update_new_password===$get_update_Confirm_Password){

    $select_query="SELECT * FROM  user WHERE user_mail='$get_update_mail' AND verify_token=$get_update_token ";
    $select_query_result=mysqli_query($connection,$select_query);

      // $row = mysqli_fetch_array($select_query_result);
      // $get_token=$row['verify_token'];
      // $get_email=$row['user_mail'];
    
    if(mysqli_num_rows($select_query_result) > 0){

      $update_query="UPDATE user SET user_password='$get_update_new_password' WHERE user_mail='$get_update_mail' ";
      $update_result=mysqli_query($connection,$update_query); 

        if($update_result){
            // echo 'updated';
           $_SESSION['status']='Successfully updated';
           $_SESSION['status_code']='success';
           header( "refresh:5; url=login.php" );
          //  header('location: login.php');
        
          }
    
        else{
          // echo 'updated error';
          $_SESSION['status']='update Error';
          $_SESSION['status_code']='error';
         
    
            }
    }

   else{
    // echo"expired pin";
    // header('location: pass_reset.php');
      $_SESSION['status']='expired pin';
      $_SESSION['status_code']='error';
      
    }

  }

  else{
    // echo 'password not same';
    $_SESSION['status']='password not same';
    $_SESSION['status_code']='error';
    
  }
    



}



?>
  <!--end update query  -->




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