<?php 
include 'aheader.php';
?>

<?php
$post_query="SELECT * FROM posts";
$post_result=mysqli_query($connection,$post_query);
$post_count=mysqli_num_rows($post_result);
?>

<?php
$request_query="SELECT * FROM request";
$request_result=mysqli_query($connection,$request_query);
$request_count=mysqli_num_rows($request_result);
?>

<?php
$user_query="SELECT * FROM user";
$user_result=mysqli_query($connection,$user_query);
$user_count=mysqli_num_rows($user_result);
?>

<?php
$category_query="SELECT * FROM category";
$category_result=mysqli_query($connection,$category_query);
$category_count=mysqli_num_rows($category_result);
?>


<main class="mt-5 pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 mt-4">
                <a href="view_post.php" class="text-decoration-none">
                    <div class="card bg-danger text-white rounded ">
                        <div class="card-body ms-4">
                            <h2 class="font-oswalt"><?php echo $post_count  ?></h2>
                            <h4 class="font-oswalt">Total Books</h4>
                            
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mt-4">
                <a href="acategory.php" class="text-decoration-none">
                    <div class="card bg-success text-white rounded ">
                        <div class="card-body ms-4">
                            <h2 class="font-oswalt"><?php echo $category_count  ?></h2>
                            <h4 class="font-oswalt">Total Categories</h4>
                            
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mt-4">
                <a  href="view_users.php" class="text-decoration-none">
                    <div class="card bg-info text-white rounded ">
                        <div class="card-body ms-4">
                            <h2 class="font-oswalt"><?php echo $user_count  ?></h2>
                            <h4 class="font-oswalt">Total Users</h4>
                            
                        </div>
                    </div>
                </a >
            </div>

            <div class="col-lg-3 mt-4">
                <a href="view_request.php" class="text-decoration-none">
                    <div class="card bg-warning text-white rounded ">
                        <div class="card-body ms-4">
                            <h2 class="font-oswalt"><?php echo $request_count  ?></h2>
                            <h4 class="font-oswalt">Total Request </h4>
                            
                        </div>
                    </div>
                </a>
            </div>

            


        </div>


        <div class="admin-image text-center mt-5">
            <img src="../images/admin4.jpg" class="img-fluid" width="800px" height="500px" alt="">
        </div>





    </div>
</main>

<!-- footer  -->

<?php include 'afooter.php'; ?>