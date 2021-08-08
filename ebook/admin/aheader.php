<?php include '../category/dp.php';
ob_start();
session_start();
if(!isset($_SESSION['A_ID'])){
  header('location: ../admin_login.php');

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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../css/admin_style.css" />
    <title>Admin</title>
  </head>

  <body>

    <nav
      class="
        navbar navbar-expand-lg navbar-dark
        fixed-top
        py-2
        shadow-lg
        bg-banner
      "
        >
      <div class="container-fluid">
        <!-- canvas button -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasExample"
          aria-controls="offcanvasExample"
        >
          <span
            class="navbar-toggler-icon"
            data-bs-target="#offcanvasExample"
          ></span>
        </button>

        <!-- end canvas button -->
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold font-oswalt"
          href="#"
          >E-Book</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="topNavBar">
          <ul class="navbar-nav ms-auto">
            

            <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img
                  src="../images/<?php echo $_SESSION['A_IMAGE'] ?>"
                  alt="12"
                  width="36"
                  height="36px"
                  class="rounded-circle"
                /><span class="text-white fs-6 fw-bold ms-2 text-capitalize"><?php echo $_SESSION['A_NAME'] ?></span></a
              >
            </a>
              <ul class="dropdown-menu bg-banner text-white dropdown-menu-end mt-2  " aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-white" href="#" data-bs-toggle="modal" data-bs-target="#logout">Logout</a></li>
              </ul>
          </li>


          </ul>
        </div>
      </div>
    </nav>

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

<!-- end model -->









 <!-- offcanvas -->
<section class="sidebar-left">
   

    <div
      class="offcanvas offcanvas-start shadow-lg   sidevar-nav"
      tabindex="-1"
      id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel"
    >
      <div class="offcanvas-body bg-banner text-white ">
        <nav class="">
          <ul class="navbar-nav  ">

            <li class="nav-item">
            <a class="nav-link" href="#">
                <img
                  src="../images/<?php echo $_SESSION['A_IMAGE'] ?>"
                  alt="user-img"
                  width="50"
                  height="50px"
                  class="rounded-circle"
                />
                <span class="text-white fs-6 fw-bold ms-3 text-capitalize"><?php echo $_SESSION['A_NAME'] ?></span></a
              >
            </li>

            


            <li>
              <hr class="dropdrown-divider my-4" />
            </li>

            <li class="nav-item">
              <a href="dashboard.php" class="nav-link fw-bold fs-5 px-3 text-white">
                <span><i class="bi bi-speedometer"></i></span>
                <span class="ms-2 ">Dash board</span>
              </a>
            </li>

            <li class="nav-item my-4">
              <a href="acategory.php" class="nav-link fw-bold fs-5 px-3 text-white">
                <span><i class="bi bi-card-text"></i></span>
                <span class="ms-2">Category</span>
              </a>
            </li>
            
            <li class="nav-item mt-2">
              <!--  this  <li> for collapse -->
              <a
                class="nav-link fw-bold fs-5 px-3 sidebar-link text-white"
                data-bs-toggle="collapse"
                href="#collapseExample"
                role="button"
                aria-expanded="false"
                aria-controls="collapseExample"
              >
                <span><i class="bi bi-book"></i></span>
                <span class="ms-3">Pages</span>
                <span class="ms-auto right-icon"
                  ><i class="bi bi-chevron-down"></i
                ></span>
              </a>

              <div class="collapse" id="collapseExample">
                <div class="text-primary">
                  <ul class="navbar-nav ps-3">
                    <li class="nav-item">
                      <a href="view_post.php" class="nav-link fw-bold fs-6 px-3 text-white">
                        <span><i class="bi bi-book-half"></i></span>
                        <span class="ms-2">View Posts</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="add_post.php" class="nav-link fw-bold fs-6 px-3 text-white">
                        <span><i class="bi bi-folder-plus"></i></span>
                        <span class="ms-2">Add Posts</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <li class="nav-item my-4">
              <a href="view_comments.php" class="nav-link fw-bold fs-5 px-3 text-white">
                <span><i class="bi bi-card-text"></i></span>
                <span class="ms-2">Comments</span>
              </a>
            </li>

            <li class="nav-item mt-2">
              <!--  this  <li> for collapse -->
              <a
                class="nav-link fw-bold fs-5 px-3 sidebar-link text-white"
                data-bs-toggle="collapse"
                href="#user"
                role="button"
                aria-expanded="false"
                aria-controls="collapseExample"
              >
                <span><i class="bi bi-people"></i></span>
                <span class="ms-3">Users</span>
                <span class="ms-auto right-icon"
                  ><i class="bi bi-chevron-down"></i
                ></span>
              </a>

              <div class="collapse" id="user">
                <div class="text-primary">
                  <ul class="navbar-nav ps-3">
                    <li class="nav-item">
                      <a href="view_users.php" class="nav-link fw-bold fs-6 px-3 text-white">
                        <span><i class="bi bi-book-half"></i></span>
                        <span class="ms-2">View Users</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="view_request.php" class="nav-link fw-bold fs-6 px-3 text-white">
                        <span><i class="bi bi-folder-plus"></i></span>
                        <span class="ms-2">User Request</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <!-- <li class="nav-item my-4">
              <a href="#" class="nav-link fw-bold fs-5 px-3 text-white">
                <span><i class="bi bi-person-circle"></i></span>
                <span class="ms-2">Profile</span>
              </a>
            </li> -->
          </ul>
        </nav>
      </div>
    </div>

    
</section>
<!-- offcavase -->


