<?php

ob_start();
session_start();
if (!isset($_SESSION['U_ID'])) {
    header('location: ../login.php');

}
include 'dp.php';
include 'category_count.php';
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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <!-- boostrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- owl carousal -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="../css/style.css" />
  <title>E-Book</title>
</head>

<body>
  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-banner ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav  mb-2 mb-lg-0 me-2 ms-auto">
            <li class="nav-item mt-1">
              <a class="nav-link text-white fw-bold " href="../index.php">
                Home</a>
            </li>

            <li class="nav-item mt-1">
              <a class="nav-link text-white fw-bold " href="#" data-bs-toggle="modal" data-bs-target="#request">
                Request</a>
            </li>



            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="../images/<?php echo $_SESSION['U_image'] ?>" alt="12" width="36" height="36px"
                  class="rounded-circle" /><span
                  class="text-white fs-6 fw-bold ms-2"><?php echo $_SESSION['U_name'] ?></span></a>
              </a>
              <ul class="dropdown-menu bg-banner text-white dropdown-menu-end mt-2 " aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-white" href="#profile" data-bs-toggle="modal"
                    data-bs-target="#profile">Profile</a></li>
                <li><a class="dropdown-item text-white" href="#" data-bs-toggle="modal"
                    data-bs-target="#edit_profile">Edit Profile</a></li>
                <li><a class="dropdown-item text-white" href="#" data-bs-toggle="modal"
                    data-bs-target="#change_password">Change Password</a></li>

                <li><a class="dropdown-item text-white" href="#" data-bs-toggle="modal"
                    data-bs-target="#logout">Logout</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>




    <!-- request Modal -->
    <div class="modal fade" id="request" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <input type="text" class="form-control" id="Book Name" name="book_name" required>
              </div>
              <div class="col-md-12">
                <label for="Book Author" class="form-label">Book Author</label>
                <input type="text" class="form-control" id="Book Author" name='book_author' required>
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
    <div class="modal fade " id="profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">User Profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="container">
              <div class=" ms-5">
                <img src="../images/<?php echo $_SESSION['U_image'] ?>" alt="12" width="100" height="100"
                  class="rounded-circle border border-4" />



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
    <div class="modal fade" id="edit_profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="image-pro text-center">
                <img src="../images/<?php echo $_SESSION['U_image'] ?>" alt="12" width="100" height="100"
                  class="rounded-circle border border-4 " />

              </div>


              <form class="row mt-3" action="header.php" method='post' enctype="multipart/form-data">
                <div class="col-md-12">
                  <label for="Username" class="form-label fw-bold">Username</label>
                  <input type="text" class="form-control" id="Username" name='edit_user_name'
                    value='<?php echo $_SESSION['U_name'] ?>'>
                </div>

                <div class="col-md-12 mt-2">
                  <label for="user_gender" class="form-label fw-bold ">Gender</label>
                  <select class="form-select" id="user_gender" name='edit_user_gender'>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>

                <div class="col-md-12 mt-2">
                  <label for="Email" class="form-label fw-bold">Email</label>
                  <input type="email" class="form-control" id="Email" name='edit_user_mail'
                    value='<?php echo $_SESSION['U_mail'] ?>'>
                </div>


                <div class="col-md-12 mt-2 ">
                  <label for="Change Photo" class="form-label fw-bold">Change Photo</label>
                  <input type="file" class="form-control" id="Change Photo" value='<?php echo $_SESSION['U_image'] ?>'
                    name='edit_user_image'>
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
    <div class="modal fade" id="change_password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="image-pro text-center">
                <img src="../images/<?php echo $_SESSION['U_image'] ?>" alt="12" width="100" height="100"
                  class="rounded-circle border border-4 " />

              </div>


              <form class="row mt-3" action="header.php" method='post' enctype="multipart/form-data">

                <div class="col-md-12 mt-2 ">
                  <label for="Password" class="form-label fw-bold">Change Password</label>
                  <input type="password" class="form-control" id="Password" name='edit_user_pass'>
                </div>

                <div class="col-md-12 mt-2">
                  <label for="Confirm Password" class="form-label fw-bold">Confirm Password</label>
                  <input type="password" class="form-control" id="Confirm Password  " name='edit_user_confirm_pass'>
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
    <div class="modal fade" id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
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






    <!-- category Navbar -->
    <section class="main category-navbar ">
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link text-uppercase" aria-current="page"
                  href="category.php?cat_title=<?php echo $cat_title; ?>"><?php echo $cat_title; ?></a>
              </li>

              <?php }?>





            </ul>

            <ul class="navbar-nav ms-auto ">

              <li class="nav-item   ">
                <form class="mt-1 " action="search.php" method="post">
                  <input type="text" placeholder="  Search" name="search_text" class="
                                      form-control
                                      fs-6
                                      mb-1

                                      rounded
                                      bg-light

                                    " />
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- end category Navbar -->
  </header>


  <!-- start sidebar -->




  <!-- sidebar category -->
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-lg-2 col-sm-12  h-100  rounded  mt-4 ">
        <div class="category py-3 px-1 bg-banner rounded-10  ">
          <h5 class="fw-bold text-center text-white fs-6 shadow-sm  py-3 px-2  "><span class="me-2">
              <i class="bi bi-list"></i>
            </span>CATEGORY</h5>

          <div class="category-details    px-1 ">

            <table class="table table-borderless ">
              <thead>
                <tr>
                  <th></th>
                  <th></th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <a class="text-decoration-none text-white fw-bold" href="all.php">ALL</a> </td>
                  <td class="category-text fw-bold text-light "><?php echo $All_post_count; ?></td>
                </tr>
                <?php
        $select_post_query = "SELECT * FROM category";
        $select_category_result = mysqli_query($connection, $select_post_query);
        while ($row = mysqli_fetch_assoc($select_category_result)) {
            $cat_id = $row['category_id'];
            $cat_title = $row['category_title'];

            $select_post_query = "SELECT * FROM posts WHERE post_category='$cat_title' ";
            $select_post_result = mysqli_query($connection, $select_post_query);
            $Category_post_count = mysqli_num_rows($select_post_result);

            ?>
                <tr>
                  <td><a class="text-decoration-none text-white fw-bold text-uppercase"
                      href='category.php?cat_title=<?php echo $cat_title; ?>'><?php echo $cat_title; ?></a></td>
                  <td class="category-text fw-bold text-light"><?php echo $Category_post_count; ?></td>
                </tr>


                <?php }?>


              </tbody>
            </table>




          </div>


        </div>
        <!-- end sidebar category -->




        <!-- languages -->
        <div class="category mt-4 py-3 px-1 bg-banner rounded-10  ">
          <h5 class="fw-bold text-center text-white fs-6 shadow-sm  py-3 px-2  "><span class="me-2">
              <i class="bi bi-book"></i>
            </span>Language</h5>

          <div class="category-details    px-1 ">

            <table class="table table-borderless ">
              <thead>
                <tr>
                  <th></th>
                  <th></th>

                </tr>
              </thead>
              <tbody>
                <!-- code for filter language -->
                <?php
          $select_cat_language_query = "SELECT DISTINCT post_language FROM posts ";
          $select_cat_language_result = mysqli_query($connection, $select_cat_language_query);

          while ($row = mysqli_fetch_assoc($select_cat_language_result)) {

              $cat_language = $row['post_language'];

              $select_language_query = "SELECT * FROM posts WHERE post_language='$cat_language' ";
              $select_language_result = mysqli_query($connection, $select_language_query);
              $language_count = mysqli_num_rows($select_language_result);
              ?>

                <tr>
                  <td><a class="text-decoration-none text-uppercase text-white fw-bold"
                      href="language.php?language=<?php echo $cat_language; ?>"><?php echo $cat_language; ?></a></td>
                  <td class="category-text fw-bold text-light"><?php echo $language_count; ?></td>
                </tr>



                <?php }?>
                <!-- code for filter language -->




              </tbody>
            </table>




          </div>


        </div>
        <!--end languages -->





      </div>
      <!-- end sidebar -->