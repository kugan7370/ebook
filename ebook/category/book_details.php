<?php
include 'dp.php';
date_default_timezone_set("Asia/Colombo");
ob_start();
session_start();
if (!isset($_SESSION['U_ID'])) {
    header('location: ../login.php');

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css" />

    <title>Book Details</title>
  </head>
  <body>

<header>

 <!-- main navbar -->
  <section class="main-nav">
        <!-- main navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-banner ">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav  mb-2 mb-lg-0 me-2 ms-auto">
              <li class="nav-item mt-1">
                <a class="nav-link text-white fw-bold " href="../index.php">
                Home</a
                >
              </li>

              <li class="nav-item mt-1">
                <a class="nav-link text-white fw-bold " href="#" data-bs-toggle="modal" data-bs-target="#request">
                Request</a
                >
              </li>





              <li class="nav-item ">
                <a class="nav-link" href="#">
                  <img
                    src="../images/<?php echo $_SESSION['U_image'] ?>"
                    alt="12"
                    width="36"
                    height="36px"
                    class="rounded-circle"
                  /><span class="text-white fs-6 fw-bold ms-2"><?php echo $_SESSION['U_name'] ?></span></a
                >
              </li>

            <li class="nav-item dropdown mt-1">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Logout
              </a>
                <ul class="dropdown-menu bg-banner text-white dropdown-menu-end mt-2 " aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-white" href="#profile"  data-bs-toggle="modal" data-bs-target="#profile">Profile</a></li>
                  <li><a class="dropdown-item text-white" href="#" data-bs-toggle="modal" data-bs-target="#edit_profile">Edit Profile</a></li>
                  <li><a class="dropdown-item text-white" href="#" data-bs-toggle="modal" data-bs-target="#change_password">Change Password</a></li>

                  <li><a class="dropdown-item text-white" href="#" data-bs-toggle="modal" data-bs-target="#logout">Logout</a></li>
              </ul>
            </li>

            </ul>
            </div>
          </div>
        </nav>
      <!--end  main navigation -->



    <!-- request Modal -->
    <div class="modal fade" id="request" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-banner text-white">
            <h5 class="modal-title " id="staticBackdropLabel">Book Request</h5>
            <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body">

          <form class="row g-3" method='post' action='header.php'>
                <div class="col-md-12">
                  <label for="Book Name" class="form-label">Book Name</label>
                  <input type="text" class="form-control" id="Book Name"  name="book_name" required>
                </div>
                <div class="col-md-12">
                  <label for="Book Author" class="form-label">Book Author</label>
                  <input type="text" class="form-control" id="Book Author" name='book_author'  required>
                </div>






        </div>
                <div class="modal-footer  ">

                  <button class="btn bg-banner text-white shadow-lg" type="submit" name="request">Request Book</button>

                </div>

            </form>
        </div>
      </div>
    </div>
    <!--end  request Modal -->




    <!--  profile model -->
    <div class="modal fade " id="profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">User Profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="container">
            <div class=" ms-5">
            <img
                      src="../images/<?php echo $_SESSION['U_image'] ?>"
                      alt="12"
                      width="100"
                      height="100"
                      class="rounded-circle border border-4"
                    />



            </div>



            <div class="information mt-3">

      <table class="table table-borderless table-center">

        <tr>
          <th scope="col">Name</th>
          <td scope="col"><?php echo $_SESSION['U_name'] ?></td>

        </tr>
        <tr>
          <th scope="col">Gender</th>
          <td scope="col"><?php echo $_SESSION['U_gender'] ?></td>

        </tr>

        <tr>
          <th scope="col">E-Mail</th>
          <td scope="col"><?php echo $_SESSION['U_mail'] ?></td>

        </tr>


      </table>



      </div>

      </div>
          </div>

        </div>
      </div>
    </div>
    <!-- end profile model -->






    <!--  Edit profile model -->
    <div class="modal fade" id="edit_profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="container">
                  <div class="image-pro text-center">
                    <img
                      src="../images/<?php echo $_SESSION['U_image'] ?>"
                      alt="12"
                      width="100"
                      height="100"

                      class="rounded-circle border border-4 "
                    />

                  </div>


                  <form class="row mt-3" action="header.php" method='post' enctype="multipart/form-data">
      <div class="col-md-12">
        <label for="Username" class="form-label fw-bold">Username</label>
        <input type="text" class="form-control" id="Username"name='edit_user_name' value='<?php echo $_SESSION['U_name'] ?>'>
      </div>

      <div class="col-md-12 mt-2">
      <label for="user_gender" class="form-label fw-bold ">Gender</label>
                <select class="form-select" id="user_gender" name='edit_user_gender'>
                    <option  value="Male">Male</option>
                    <option  value="Female">Female</option>
                </select>
      </div>

      <div class="col-md-12 mt-2">
        <label for="Email" class="form-label fw-bold">Email</label>
        <input type="email" class="form-control" id="Email" name='edit_user_mail' value='<?php echo $_SESSION['U_mail'] ?>'>
      </div>


      <div class="col-md-12 mt-2 ">
        <label for="Change Photo" class="form-label fw-bold">Change Photo</label>
        <input type="file" class="form-control" id="Change Photo" value='<?php echo $_SESSION['U_image'] ?>' name='edit_user_image' >
      </div>




              </div>

          </div>
          <div class="modal-footer">


        <button type="submit" class="btn bg-banner text-white" name='user_profile_update'>Update</button>

          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end Edit profile model -->




    <!-- Edit password -->
    <div class="modal fade" id="change_password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="container">
                  <div class="image-pro text-center">
                    <img
                      src="../images/<?php echo $_SESSION['U_image'] ?>"
                      alt="12"
                      width="100"
                      height="100"

                      class="rounded-circle border border-4 "
                    />

                  </div>


          <form class="row mt-3" action="header.php" method='post' enctype="multipart/form-data">

            <div class="col-md-12 mt-2 ">
              <label for="Password" class="form-label fw-bold">Change Password</label>
              <input type="password" class="form-control" id="Password" name='edit_user_pass'  >
            </div>

            <div class="col-md-12 mt-2">
              <label for="Confirm Password" class="form-label fw-bold">Confirm Password</label>
              <input type="password" class="form-control" id="Confirm Password  "name='edit_user_confirm_pass' >
            </div>

        </div>

          </div>
          <div class="modal-footer">


        <button type="submit" class="btn bg-banner text-white" name='user_password_update'>Update</button>

          </div>
          </form>
        </div>
      </div>
    </div>
    <!--end Edit password -->



    <!-- model for logout -->
    <div class="modal fade" id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Ready to leave</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="../logout.php" class="btn btn-primary " type="button">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end model for logout -->





  <!-- insert request to database -->
    <?php
  if (isset($_POST['request'])) {

    $get_request_book_name = $_POST['book_name'];
    $get_request_book_author = $_POST['book_author'];

    $t = date('Y-m-d H:i:s');
    $insert_request_query = "INSERT INTO request (request_book, request_author, request_date, request_user, request_user_image) VALUES('$get_request_book_name', '$get_request_book_author', '$t', '{$_SESSION["U_name"]}', '{$_SESSION["U_image"]}')";
    $insert_request_result = mysqli_query($connection, $insert_request_query);

    if ($insert_request_result) {

        $_SESSION['status'] = 'Successfully Requested';
        $_SESSION['status_code'] = 'success';
        header('location: all.php');

    } else {
        $_SESSION['status'] = 'Request Error';
        $_SESSION['status_code'] = 'error';
        header('location: all.php');

    }
  }
  ?>
  <!-- end insert request to database -->





  <!-- user profile update php code -->
      <?php
  if (isset($_POST['user_profile_update'])) {
      $get_edit_user_name = $_POST['edit_user_name'];
      // $get_edit_user_password=$_POST['edit_user_pass'];
      $get_edit_user_mail = $_POST['edit_user_mail'];
      // $get_edit_user_confirm_password=$_POST['edit_user_confirm_pass'];
      $get_edit_user_gender = $_POST['edit_user_gender'];

      $get_edit_user_image = $_FILES['edit_user_image']['name'];
      $get_edit_user_image_temp = $_FILES['edit_user_image']['tmp_name'];

      move_uploaded_file($get_edit_user_image_temp, "../images/$get_edit_user_image");

      $update_query = "UPDATE user SET user_name='$get_edit_user_name', user_gender='$get_edit_user_gender', user_mail='$get_edit_user_mail', user_image='$get_edit_user_image' WHERE user_id={$_SESSION['U_ID']} ";
      $update_result = mysqli_query($connection, $update_query);

      if ($update_result) {

          $_SESSION['status'] = 'Successfully updated';
          $_SESSION['status_code'] = 'success';
          header('location: all.php');

      } else {
          $_SESSION['status'] = 'update Error';
          $_SESSION['status_code'] = 'error';
          header('location: all.php');

      }

  }
  ?>
  <!--end  user profile update  php code -->




  <!-- change password php code -->
  <?php
  if (isset($_POST['user_password_update'])) {
      // $get_edit_user_name=$_POST['edit_user_name'];
      $get_edit_user_password = $_POST['edit_user_pass'];
      // $get_edit_user_mail=$_POST['edit_user_mail'];
      $get_edit_user_confirm_password = $_POST['edit_user_confirm_pass'];
      // $get_edit_user_gender=$_POST['edit_user_gender'];

      // $get_edit_user_image=$_FILES['edit_user_image']['name'];
      // $get_edit_user_image_temp=$_FILES['edit_user_image']['tmp_name'];

      if ($get_edit_user_password === $get_edit_user_confirm_password) {
          $update_query = "UPDATE user SET  user_password='$get_edit_user_password' WHERE user_id={$_SESSION['U_ID']} ";
          $update_result = mysqli_query($connection, $update_query);

          if ($update_result) {

              $_SESSION['status'] = 'Successfully updated';
              $_SESSION['status_code'] = 'success';
              header('location: all.php');

          } else {
              $_SESSION['status'] = 'update Error';
              $_SESSION['status_code'] = 'error';
              header('location: all.php');

          }

      }

  }
  ?>
  <!-- end change password php code -->


  </section>
 <!--end  main navbar -->






  <!-- category Navbar -->
    <section class="main category-navbar ">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                    <div class="container-fluid">

                      <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                      >
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">

                        <ul class="navbar-nav ">

                          <li class="nav-item  ">
                            <a class="nav-link text-uppercase" aria-current="page" href="all.php">ALL</a>
                          </li>
                        <?php
        $select_post_query = "SELECT * FROM category";
        $select_category_result = mysqli_query($connection, $select_post_query);

      while ($row = mysqli_fetch_assoc($select_category_result)) {
          $cat_id = $row['category_id'];
          $cat_title = $row['category_title'];

          ?>
                              <li class="nav-item  ">
                                <a class="nav-link text-uppercase" aria-current="page" href="category.php?cat_title=<?php echo $cat_title; ?>"><?php echo $cat_title; ?></a>
                              </li>

                            <?php }?>





                        </ul>

                              <ul class="navbar-nav ms-auto ">

                              <li class="nav-item   ">
                            <form class="mt-1 "action="search.php" method="post">
                              <input type="text"placeholder="Search" name="search_text"class="form-control fs-6 mb-1  rounded  bg-light "/>
                            </form>
                          </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
    </section>
  <!-- end category Navbar -->

</header>



  <!-- start book details -->
  <?php
  if (isset($_GET['id'])) {

    $book_detail_id = $_GET['id'];

    $select_post_query = "SELECT * FROM posts WHERE post_id=$book_detail_id";
    $select_post_result = mysqli_query($connection, $select_post_query);
    while ($row = mysqli_fetch_assoc($select_post_result)) {

        $post_id = $row['post_id'];
        $post_image = $row['post_image'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_content = $row['post_content'];
        $post_date = $row['post_date'];
        $post_language = $row['post_language'];
        $post_file = $row['post_file'];
        $post_category = $row['post_category'];

        $_SESSION['book_name'] = $post_title;

    }

    ?>









    <div class="container mt-4 mb-3">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-sm-12 col-md-12 book  rounded border-primary">
          <img  src='../images/<?php echo $post_image ?>' class="img-fluid book-image bg-light shadow-sm" alt="" />
        </div>

        <div class="col-lg-6 px-4 mt-3">
          <div class="book-name">
            <h1 class="fw-bold text-capitalize"><?php echo $post_title ?></h1>
            <small class="fw-bold text-secondary"> by <?php echo $post_author ?></small>
          </div>

          <div class="button mt-4 mb-4 col-lg-4">
          <a href='../uploads/<?php echo $post_file; ?>' type="button" class="btn d-grid rounded-pill  text-white bg-banner ">Read Now</a>
          </div>




          <div class="book-details mt-3  ">
            <h5 class="fw-bold text-secondary">Book Details</h5>
          </div>




          <div class="book-content ">
            <p class="pt-3">
            <?php echo $post_content ?>
            </p>
          </div>


        <div class="col-lg-5  mt-4 ">
                <h5 class="fw-bold text-secondary">More information</h5>
                <table class="table  table-borderless">
                 <thead>
                   <tr>

                    <th ></th>
                    <th ></th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr>

                        <td>Author</td>
                        <td><?php echo $post_author ?></td>
                      </tr>
                      <tr>

                        <td>Language</td>
                        <td><?php echo $post_language ?></td>
                      </tr>

                      <tr>

                        <td>Date</td>
                        <td><?php echo $post_date ?></td>
                      </tr>
                      <tr>

                        <td>Category</td>
                        <td><?php echo $post_category ?></td>
                      </tr>

                    </tbody>
                </table>

        </div>








        </div>


      </div>
    </div>

    <?php }?>
  <!--end book details -->


  <!--view comments -->
<section class="comments mt-5 bg-light">

            <div class="container">
            <div class="row">
            <div class="justify-content-center ">



              <h5 class="fw-bold p-5 ">View Comments</h5>
              <hr class="mb-5 text-secondary shadow-lg">
              <?php
          $select_post_query = "SELECT * FROM comments WHERE comment_post='$post_title' ORDER BY comment_date DESC ";
          $select_post_result = mysqli_query($connection, $select_post_query);
          while ($row = mysqli_fetch_assoc($select_post_result)) {

              $comment_id = $row['comment_id'];
              $comment_user_image = $row['comment_user_image'];
              $comment_user = $row['comment_user'];
              $comment_content = $row['comment_content'];
              $comment_date = $row['comment_date'];

              ?>

                <div class="card mb-3 border-0 bg-light" style="max-width: 340px; ">
                  <div class="row g-0">
                    <div class="col-md-4 pt-3 ps-2 rounded  col-sm-center">
                    <img height="90px" width="90px" src="../images/<?php echo $comment_user_image; ?>"  class=" img-thumbnail img-fluid rounded-circle " alt="...">
                    </div>
                    <div class="col-md-8 ">
                      <div class="card-body">
                        <h5 class="card-title"> <?php echo $comment_user; ?> </h5>
                        <p class="card-text"> <?php echo $comment_content; ?> </p>
                        <p class="card-text"><small class="text-muted"><span class="me-2"><i class="bi bi-calendar-day"></i></span><?php echo $comment_date; ?></small></p>
                      </div>
                    </div>
                  </div>
                </div>

                <?php }
          ?>
          <!--end view comments -->


              <hr class="mt-5 mb-5">


              <form class="mt-4 mb-4" method='post' action='book_details.php?id=<?php echo $post_id; ?>' >


              <div class="col-lg-4">
              <textarea class="form-control w-100 " id="exampleFormControlTextarea1" placeholder="Type your comment"rows="3" name="comment_content"></textarea>
                <button class="btn d-grid w-100 text-white bg-banner  mt-2   " type="submit" name="comment_submit">Submit</button>
              </div>
              </form>


          </div>
          </div>




</section>
<!--end view comments -->



  <!-- user comments -->
<?php
if (isset($_POST['comment_submit'])) {

    $get_comment_content = $_POST['comment_content'];

    $t = date('Y-m-d H:i:s');
    $insert_comment_query = "INSERT INTO comments (comment_post, comment_content, comment_date, comment_user, comment_user_image) VALUES ('{$_SESSION["book_name"]}', '$get_comment_content', '$t', '{$_SESSION["U_name"]}', '{$_SESSION["U_image"]}' )";
    $insert_comment_result = mysqli_query($connection, $insert_comment_query);

    if ($insert_comment_result) {
        $_SESSION['status'] = 'successfully added';
        $_SESSION['status_code'] = 'success';
        
       

    } else {
        $_SESSION['status'] = 'not add';
        $_SESSION['status_code'] = 'error';

    }

}
?>
<!--end  user comments -->




<!-- footer -->
<footer class="bg-banner mt-5" id="4">
    <div class="container text-white">
    <div class="row ">

    <div class="col-lg-4 mt-4">
      <div class="image-ebook">
        <h4 class=" mb-3 fw-bold">E-Book</h4>
        <img src="../images/b3.png " height="200px" width="300px" class="img-fluid" alt="">


       </div>

    </div>

    <div class="col-lg-4 mt-4">
      <div class="contact" id="4">
          <h4 class="mb-5 fw-bold">Contact Us</h4>
         <div class="contacts  ">
            <h6 class="fw-bold text-secondary"><span class="me-3"><i class="bi bi-geo-alt"></i></span>online E-book, Srilanka</h6><br>
            <h6  class="fw-bold text-secondary" ><span class="me-3"><i class="bi bi-telephone"></i></span>+94-779878560</h6><br>
            <h6  class="fw-bold text-secondary"><span class="me-3"><i class="bi bi-envelope"></i></span>ebook@gmail.com</h6><br>
            <div class=" social-icon ">
               <span class="user fs-4 text-primary  me-4"><i class="bi bi-facebook"></i></span>
               <span class="user fs-4 text-info me-4"><i class="bi bi-twitter"></i></i></span>
               <span class="user fs-4 text-danger"><i class="bi bi-google"></i></i></span>
        </div>
          </div>

       </div>

    </div>


    <div class="col-lg-4 mt-4">
    <h4 class="mb-4 fw-bold">Navigation</h4>
    <ul class="nav flex-column ">
      <li class="nav-item ">
          <a class="nav-link fw-bold text-secondary" href="#">Home</a>
        </li>
      <li class="nav-item">
        <a class="nav-link fw-bold text-secondary" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fw-bold text-secondary" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
      <li class="nav-item">
        <a class="nav-link fw-bold text-secondary" href="#">Sign Up</a>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    

    <!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- sweet alert php -->
<?php

if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
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
