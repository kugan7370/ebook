<?php include 'dp.php'; ?>




<!-- all count -->
<?php
$select_post_query="SELECT * FROM posts ";
$select_post_result=mysqli_query($connection,$select_post_query);
$All_post_count=mysqli_num_rows($select_post_result);
?>





