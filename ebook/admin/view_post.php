<?php include 'aheader.php';

?>


<main class="mt-5 pt-3">
    <div class="container">
    <div class="card mt-5 mb-2 mx-2 border-0 bg-light">
  <div class="card-header border-0">
    View All Posts
  </div>
  <div class="card-body">
    
  <div class="card-tables table-responsive">
      

  <table class="table  table-hover   ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">AUTHOR</th>
      <th scope="col">IMAGE</th>
      <th scope="col">CATEGORY</th>
       
      <th scope="col">LANGUAGE</th>
      <th scope="col">COMMENT</th>
      <th scope="col">STATUS</th>
      <th scope="col">DELETE</th>
    
      
    </tr>
  </thead>
  <tbody class="text-start ">

  <?php
  $select_post_query="SELECT * FROM posts";
  $select_post_result=mysqli_query($connection,$select_post_query);
  while($row=mysqli_fetch_assoc($select_post_result)){
    
    $post_id=$row['post_id'];
    $post_image=$row['post_image'];
    $post_title= substr($row['post_title'],0,25);
    $post_author=$row['post_author'];
    $post_category=$row['post_category'];
    $post_status=$row['post_status'];
    $post_language=$row['post_language'];
    $post_comment_count=5;

    // $post_content=$row['post_content'];
    // $post_date=$row['post_date'];  
    // $post_file=$row['post_file'];
    // $post_tags=$row['post_tags'];
   ?>
    
    
    
  
    <tr>
     
      <td><?php echo$post_id; ?></td>
      <td><?php echo$post_title; ?></td>
      <td><?php echo$post_author; ?></td>
      <td><img class="img-fluid" width="35px" height="45px" src="../images/<?php echo$post_image; ?>" alt=""></td>
      <td><?php echo$post_category; ?></td>
      <td><?php echo$post_language; ?></td>
      <td><?php echo$post_comment_count; ?></td>
      <td><?php echo$post_status; ?></td>
      <td class="text-center"><a href='view_post.php?delete=<?php echo$post_id; ?>' ><i class="bi bi-x-circle text-danger"></i></a></td>
    </tr>

    <?php } ?>
   
  </tbody>
</table>
  

  </div>

  </div>
</div>





    </div>
</main>

<!-- footer  -->

<?php include 'afooter.php'; ?>


<!-- delete query -->
<?php 

if(isset($_GET['delete'])){
  $del_post_id=$_GET['delete'];

  $del_post_query="DELETE FROM posts WHERE post_id=$del_post_id";
  $del_post_result=mysqli_query($connection,$del_post_query);
    
 if($del_post_result){
  $_SESSION['status']='successfully Deleted';
  $_SESSION['status_code']='success';
  header('location: view_post.php');
 }
 else{
  $_SESSION['status']='not deleted';
  $_SESSION['status_code']='error';
  header('location: view_post.php');
 }
} 

?>