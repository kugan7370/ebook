<?php include 'aheader.php';

?>


<main class="mt-5 pt-3">
    <div class="container">
    <div class="card mt-5 mb-2 mx-2 border-0 bg-light">
  <div class="card-header border-0">
    View Comments
  </div>
  <div class="card-body">
    
  <div class="card-tables  table-responsive">
      

  <table class="table  table-hover ">
  <thead>
    <tr>
      <th scope="col">Comment Id</th>
      <th scope="col">Book Name</th>
      <th scope="col">User Image</th>
      <th scope="col">User</th>
      <th scope="col">Comments</th>
      <th scope="col">Date</th>
       
      <th scope="col">Delete</th>
      
    
      
    </tr>
  </thead>
  <tbody class="text-start ">

  <?php
  $select_comment_query="SELECT * FROM comments";
  $select_comment_result=mysqli_query($connection,$select_comment_query);
  while($row=mysqli_fetch_assoc($select_comment_result)){
    
    $comment_id=$row['comment_id'];
    $comment_post=$row['comment_post'];
    $comment_content=$row['comment_content'];
    $comment_date=$row['comment_date'];
    $comment_user=$row['comment_user'];
    $comment_user_image=$row['comment_user_image'];
   

    
   ?>
    
    
    
  
    <tr>
     
      <td><?php echo$comment_id ?></td>
      <td><?php echo$comment_post; ?></td>
      <td><img class="rounded-circle" width="36" height="36"  src="../images/<?php echo$comment_user_image; ?>" alt=""></td>
      <td><?php echo$comment_user; ?></td>
      <td><?php echo$comment_content; ?></td>
      <td><?php echo$comment_date; ?></td>
      
      
     
     
     
      <td class=""><a href='view_comments.php?delete=<?php echo$comment_id; ?>' ><i class="bi bi-x-circle text-danger"></i></a></td>
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


<!-- delete comment query -->
<?php 

if(isset($_GET['delete'])){
  $del_comment_id=$_GET['delete'];

  $del_comment_query="DELETE FROM comments WHERE comment_id=$del_comment_id";
  $del_comment_result=mysqli_query($connection,$del_comment_query);
    
 if($del_comment_result){
  $_SESSION['status']='successfully Deleted';
  $_SESSION['status_code']='success';
  header('location: view_comments.php');
 }
 else{
  $_SESSION['status']='not deleted';
  $_SESSION['status_code']='error';
  header('location: view_comments.php');
 }
} 

?>