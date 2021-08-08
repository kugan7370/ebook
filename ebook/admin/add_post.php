<?php include 'aheader.php'; ?>

<?php

if(isset($_POST['add_post'])){
   $post_title=$_POST['post_title'];
   $post_author=$_POST['post_author'];
   $post_language=$_POST['post_language'];
   $post_category=$_POST['post_category'];
   $post_tags=$_POST['post_tags'];
   $post_comment_count=5;

/* upload image */
   $post_image=$_FILES['post_image']['name'];
   $post_image_temp=$_FILES['post_image']['tmp_name'];

   $post_content=$_POST['post_content'];
   $post_status=$_POST['post_status'];

   /* upload file */

   $post_file=$_FILES['post_file']['name'];
   $post_file_temp=$_FILES['post_file']['tmp_name'];

  /* move file to image folder */
   move_uploaded_file($post_image_temp,"../images/$post_image");

   /* move file to upload folder */
   move_uploaded_file($post_file_temp,"../uploads/$post_file");


   /*INSERT DATABASE QUERY */
   
   $insert_post_query="INSERT INTO posts (post_title, post_author, post_tags, post_image, post_category, post_language, post_content, post_date, post_file, post_comment_count, post_status) 
   VALUES('$post_title', '$post_author', '$post_tags', '$post_image', '$post_category','$post_language', '$post_content', now(),'$post_file','$post_comment_count','$post_status' )";

    $insert_query_result=mysqli_query($connection, $insert_post_query);

     if($insert_post_query){
      $_SESSION['status']='successfully added';
      $_SESSION['status_code']='success';
       }

      else{
        $_SESSION['status']='not added';
        $_SESSION['status_code']='error';
         }

}


?>








<main class="mt-5 pt-3">
<div class="container">
    <div class="card mt-4 border-0 bg-light">
       <div class="card-header bg-secondary text-white fw-bold fs-6">
         Add Posts
       </div>
  <div class="card-body">
    
<div class="add-posts">
<form class="row g-3" action="" method="post" enctype="multipart/form-data" >

<div class="col-md-4">
    <label for="TITLE" class="form-label">TITLE</label>
   <input type="text" class="form-control" id="TITLE" name="post_title"  required>
    </div>

  <div class="col-md-4">
    <label for="AUTHOR" class="form-label">AUTHOR</label>
    <input type="text" class="form-control" id="AUTHOR" value="" name="post_author" required>
  </div>

 
  <div class="col-md-4">
    <label for="LANGUAGE" class="form-label">LANGUAGE</label>
    <select class="form-select" id="STATUS" name="post_language" required> 
        <option value="Tamil">Tamil</option>
        <option value="English">English</option>
        <option value="Singala">Singala</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="CATEGORY" class="form-label">CATEGORY</label>
    
    <select class="form-select" id="STATUS" name="post_category" required> 

    <?php
    $select_cat_query="SELECT * From category";
    $select_cat_result = mysqli_query($connection,$select_cat_query);
        while($row = mysqli_fetch_assoc( $select_cat_result)){
                $cat_id=$row['category_id'];
                $cat_title=$row['category_title'];  
                
                echo  "<option value='{$cat_title}'>{$cat_title}</option>";
        }
                ?>


    </select>
  </div>

  <div class="col-md-4">
    <label for="TAGS" class="form-label">TAGS</label>
      <input type="text" class="form-control" id="TAGS" name="post_tags"  required>
    </div>

    <div class="col-md-4">
    <label for="BOOK_IMAGE" class="form-label">BOOK IMAGE</label>
     <input type="file" class="form-control" id="BOOK_IMAGE"  name="post_image" required>
    </div>
  
  <div class="col-md-4">
    <label for="STATUS" class="form-label">STATUS</label>
    <select class="form-select" id="STATUS" name="post_status" required> 
        <option value="Published">Published</option>
        <option value="Unpublished">Unpublished</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="BOOK_UPLOAD" class="form-label"> BOOK UPLOAD</label>
    <input type="file" class="form-control" id="BOOK_UPLOAD" name="post_file"  required>
   </div>

 

  <div class="col-md-12">
    <label for="BOOK_CONTANT" class="form-label">BOOK CONTENT</label> 
    <textarea class="form-control" id="BOOK_CONTANT" rows="3" name="post_content" required></textarea>
   </div>
 
  
  <div class="col-lg-12 d-grid">
    <button class="btn bg-banner text-white" type="submit" name="add_post">ADD POST</button>
  </div>

</form>













        </div>

  </div>
</div>




</div>
</main>

<?php include 'afooter.php'; ?>