<?php include 'aheader.php';

?>


<main class="mt-5 pt-3">
    <div class="container">
    <div class="card mt-5 mb-2 mx-2 border-0 bg-light">
  <div class="card-header border-0">
    View Users
  </div>
  <div class="card-body">
    
  <div class="card-tables  table-responsive">
      

  <table class="table  table-hover ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User</th>
      <th scope="col">User Name</th>
      <th scope="col">Gender</th>
      <th scope="col">E-Mail</th>
       
      <th scope="col">Delete</th>
      
    
      
    </tr>
  </thead>
  <tbody class="text-start ">

  <?php
  $select_user_query="SELECT * FROM user";
  $select_user_result=mysqli_query($connection,$select_user_query);
  while($row=mysqli_fetch_assoc($select_user_result)){
    
    $user_id=$row['user_id'];
    $user_name=$row['user_name'];
    $user_mail=$row['user_mail'];
    $user_image=$row['user_image'];
    $user_gender=$row['user_gender'];
   

    
   ?>
    
    
    
  
    <tr>
     
      <td><?php echo$user_id ?></td>
      <td><img class="rounded-circle" width="36" height="36"  src="../images/<?php echo$user_image; ?>" alt=""></td>
      <td><?php echo$user_name; ?></td>
      <td><?php echo$user_gender; ?></td>
      <td><?php echo$user_mail; ?></td>
     
     
     
      <td class=""><a href='view_users.php?delete=<?php echo$user_id; ?>' ><i class="bi bi-x-circle text-danger"></i></a></td>
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
  $del_user_id=$_GET['delete'];

  $del_user_query="DELETE FROM user WHERE user_id=$del_user_id";
  $del_user_result=mysqli_query($connection,$del_user_query);
    
 if($del_user_result){
  $_SESSION['status']='successfully Deleted';
  $_SESSION['status_code']='success';
  header('location: view_users.php');
 }
 else{
  $_SESSION['status']='not deleted';
  $_SESSION['status_code']='error';
  header('location: view_users.php');
 }
} 

?>