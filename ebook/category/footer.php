


 <!-- sidebar divs (container,row)  -->
 </div>
    </div>
 <!--  end sidebar divs (container,row)  -->
 
 <!-- footer -->
<footer class="bg-banner mt-5" id="4">
    <div class="container text-white">
    <div class="row ">

    <div class="col-lg-4 mt-4">
      <div class="image-ebook">
        <h4 class=" mb-3 fw-bold">E-Book</h4>
        <img src="../images/b3.png " height="200px" width="300px" class="img-fluid" alt="">
    
    
       </div>
    
    </div>

    <div class="col-lg-4 mt-4">
      <div class="contact" id="4">
          <h4 class="mb-5 fw-bold">Contact Us</h4>
         <div class="contacts  ">
            <h6 class="fw-bold text-secondary"><span class="me-3"><i class="bi bi-geo-alt"></i></span>online E-book, Srilanka</h6><br>
            <h6  class="fw-bold text-secondary" ><span class="me-3"><i class="bi bi-telephone"></i></span>+94-779878560</h6><br>
            <h6  class="fw-bold text-secondary"><span class="me-3"><i class="bi bi-envelope"></i></span>ebook@gmail.com</h6><br>
            <div class=" social-icon ">
               <span class="user fs-4 text-primary  me-4"><i class="bi bi-facebook"></i></span>
               <span class="user fs-4 text-info me-4"><i class="bi bi-twitter"></i></i></span>
               <span class="user fs-4 text-danger"><i class="bi bi-google"></i></i></span>
        </div>
          </div>
    
       </div>
    
    </div>


    <div class="col-lg-4 mt-4">
    <h4 class="mb-4 fw-bold ms-4">Navigation</h4>
    <ul class="nav flex-column ">
      <li class="nav-item ">
          <a class="nav-link fw-bold text-secondary" href="#">Home</a>
        </li>
      <li class="nav-item">
        <a class="nav-link fw-bold text-secondary" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fw-bold text-secondary" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
      <li class="nav-item">
        <a class="nav-link fw-bold text-secondary" href="#">Sign Up</a>
      </li>
      </li>
    </ul>

    <div class="find_us">
    <div class="icons">
    
    
    
    </div>
    
    
    </div>
    
    
    
    </div>
    
    
    
    
    
    
    </div>
    
    <div class="copy text-center text-secondary  ">
    <h6 class=" mt-3 mb-3 py-5">Copyright © 2021 All rights reserved| This is made by CIS</h6>
    
    </div>
    
    
    
    </div>
    
    
    
    
    
    
    
    
    
    
</footer>
<!-- end footer -->

 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- js script for carousel and comman -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- owl carousel js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>
  <script src="../js/validation.js"></script>
   


<!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- sweet alert php -->
<?php

if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
  ?>
  <script>
  swal({
    title: "<?php echo $_SESSION['status']; ?>",
    /* text: " ",*/
    icon: "<?php echo $_SESSION['status_code']; ?>",
    button: "Ok done!",
  });
  </script>
  <?php
  unset($_SESSION['status']);
}
  ?>
<!--end  sweet alert php -->


  </body>
</html>


