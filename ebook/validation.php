<?php
include 'dp.php';
?>

<!-- email validation -->
<?php 

 if(isset($_POST['email_id'])) {  

    $email=$_POST['email_id'];
   

    $select_email="SELECT * FROM user where user_mail='$email'";
    $select_result=mysqli_query($connection,$select_email);

    if(mysqli_num_rows($select_result)>0){
    
      echo "<span style='color:red' > email already exits! </span> ";
      ?>
      <script>
         $('.checking_mail').css("border", "1px solid red");
         $('#submit').click(function () {
          return false;
        });

      </script>
      <?php
    }
    else{
      echo "<span style='color:green'>it is abailable</span> ";
      ?>
      <script>
         $('.checking_mail').css("border", "1px solid green");

      </script>
      <?php
    }

  }
 
?>
 

<!-- username validation -->
<?php 
if(isset($_POST['user_name'])) {  

  
    $username=$_POST['user_name'];

    $select_email="SELECT * FROM user where user_name='$username'";
    $select_result=mysqli_query($connection,$select_email);

    if(mysqli_num_rows($select_result)>0){
    
      echo "<span style='color:red' > email already exits! </span> ";
      ?>
      <script>
        $('.checking_username').css("border", "1px solid red");
        $('#submit').click(function () {
          return false;
        });
       

      </script>
      <?php
    }
    else{
      echo "<span style='color:green'>it is abailable</span> ";
      ?>
      <script>
        $('.checking_username').css("border", "1px solid green");

      </script>
      <?php
    }

  }


?>





<!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- js script for carousel and comman -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<!-- owl carousel js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/validation.js"></script> --> 