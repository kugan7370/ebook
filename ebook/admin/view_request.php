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
      <th scope="col">Request ID</th>
      <th scope="col">User Image</th>
      <th scope="col">User Name</th>
      <th scope="col">Request Book</th>
      <th scope="col">Request Book Author</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>




    </tr>
  </thead>
  <tbody class="text-start ">

  <?php
$select_request_query = "SELECT * FROM request order by request_date DESC";
$select_request_result = mysqli_query($connection, $select_request_query);
while ($row = mysqli_fetch_assoc($select_request_result)) {

    $request_id = $row['request_id'];
    $request_book = $row['request_book'];
    $request_author = $row['request_author'];
    $request_user_image = $row['request_user_image'];
    $request_user = $row['request_user'];
    $request_date = $row['request_date'];

    ?>




    <tr>

      <td><?php echo $request_id ?></td>
      <td><img class="rounded-circle" width="36" height="36"  src="../images/<?php echo $request_user_image; ?>" alt=""></td>
      <td><?php echo $request_user; ?></td>
      <td><?php echo $request_book; ?></td>
      <td><?php echo $request_author; ?></td>
      <td><?php echo $request_date; ?></td>



      <td class=""><a href='view_request.php?delete=<?php echo $request_id; ?>' ><i class="bi bi-x-circle text-danger"></i></a></td>
    </tr>

    <?php }?>

  </tbody>
</table>


  </div>

  </div>
</div>





    </div>
</main>

<!-- footer  -->

<?php include 'afooter.php';?>


<!-- delete query -->
<?php

if (isset($_GET['delete'])) {
    $del_request_id = $_GET['delete'];

    $del_request_query = "DELETE FROM request WHERE request_id=$del_request_id";
    $del_request_result = mysqli_query($connection, $del_request_query);

    if ($del_request_result) {
        $_SESSION['status'] = 'successfully Deleted';
        $_SESSION['status_code'] = 'success';
        header('location: view_request.php');
    } else {
        $_SESSION['status'] = 'not deleted';
        $_SESSION['status_code'] = 'error';
        header('location: view_request.php');
    }
}

?>