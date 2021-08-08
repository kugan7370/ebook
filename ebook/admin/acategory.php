<?php 
include 'aheader.php';

?>


<main class="mt-5 pt-3">
    <div class="container ">
        <div class="row">
            <div class="col-lg-5 ms-5 ">
                <div class=" card mt-5 mb-2 bg-light border-0   ">
                    <div class="card-header border-0 ">
                        Add Category
                    </div>
                    <div class="card-body">
                        <form class="row g-3" method='post' action="acategory.php">
                            <div class="col-md-12">
                                <!-- <label for="validationDefault01" class="form-label">Add Categories</label> -->
                                <input type="text" class="form-control mt-3"  name="add_cat_title"  required>
                            </div>
                            
                            <div class="col-md-12 d-grid  ">
                                <button class="btn bg-banner text-white" type="submit" name="add_cat_submit">ADD</button>
                            </div>
                        </form>
                        
                    </div>
                </div>

            
            </div>


            <div class="col-lg-6 ms-1 ">
                <div class="card border-3 mt-5 mb-2 mx-2 border-0 bg-light w-75  ">
                         <div class="card-header border-0  ">
                                 View All Category
                         </div>
                    <div class="card-body">
                
                        <div class="card-tables table-responsive">
                
                
                          <table class="table  table-hover   ">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    
                                    <th scope="col">CATEGORY</th>
                                    
                                    
                                    <th scope="col">DELETE</th>
                                    
                                    
                                    </tr>
                                </thead>
                                <tbody class="text-start ">
                
                                <?php
                                $select_category_query="SELECT * FROM category";
                                $select_category_result=mysqli_query($connection,$select_category_query);
                                while($row=mysqli_fetch_assoc($select_category_result)){
                                    
                                    $category_id=$row['category_id'];
                                    $category_title=$row['category_title'];
                                    
                
                                    // $post_content=$row['post_content'];
                                    // $post_date=$row['post_date'];  
                                    // $post_file=$row['post_file'];
                                    // $post_tags=$row['post_tags'];
                                ?>
                                    
                                    
                                    
                                
                                    <tr>
                                    
                                    <td><?php echo$category_id; ?></td>
                                    
                                    <td class="text-uppercase"><?php echo$category_title; ?></td>
                                    
                                    <td class=""><a href='acategory.php?cat_delete=<?php echo$category_id; ?>' ><i class="bi bi-x-circle text-danger"></i></a></td>
                                    </tr>
                
                                    <?php } ?>
                                
                                </tbody>
                            </table>
                
                
                         </div>
                
                    </div>
                </div>
            </div>
        </div>





    </div>
</main>

<!-- footer  -->

<?php include 'afooter.php'; ?>


<!-- delete query -->
<?php 

if(isset($_GET['cat_delete'])){
  $del_cat_id=$_GET['cat_delete'];

  $del_cat_query="DELETE FROM category WHERE category_id=$del_cat_id";
  $del_cat_result=mysqli_query($connection,$del_cat_query);
    
 if($del_cat_result){
     
  $_SESSION['status']='successfully Deleted';
  $_SESSION['status_code']='success';
  header('location: acategory.php');
 }
 else{
    
  $_SESSION['status']='not deleted';
  $_SESSION['status_code']='error';
  header('location: acategory.php');

 }
} 




if(isset($_POST['add_cat_submit'])){
$get_add_cat_title=$_POST['add_cat_title'];

$insert_query="INSERT INTO category (category_title) VALUES ('$get_add_cat_title')";
$insert_result=mysqli_query($connection,$insert_query);

if($insert_result){
    $_SESSION['status']='successfully added';
    $_SESSION['status_code']='success';
    header('location: acategory.php');
   }
   else{
    $_SESSION['status']='not add';
    $_SESSION['status_code']='error';
    header('location: acategroy.php');
   }



}

?>

