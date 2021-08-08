<?php include 'dp.php';
include 'header.php';
 ?>
 
 <!-- search -->
  <!-- overview -->
  <div class="col-lg-10 col-sm-12  mt-4 ">
    <section>
    <div class="new-releases mt-1  ">
        <div class="new-releases-header mb-3"> 
             <h4 class="text-center font-monospace bg-banner py-3 text-white  rounded ">SERCHED BOOK</h4>
             
             
        </div>
        <div class="row mt-5">
        <div class="owl-carousel owl-theme"">
            
        <?php 
 
 if(isset($_POST['search_text'])){
     $post_search_tag=$_POST['search_text'];

     
          $select_post_query="SELECT * FROM posts WHERE post_tags LIKE '%$post_search_tag%'";
          $select_post_result=mysqli_query($connection,$select_post_query);
          while($row=mysqli_fetch_assoc($select_post_result)){
            $post_id=$row['post_id'];
            $post_title=$row['post_title'];
            $post_image=$row['post_image'];

            ?>
             <div class=" col-lg-12 col-sm-12 w-100 ">
            <div class="card  category-images mb-4 shadow-lg w-100 bg-light mt-4  ">
                <img   src="../images/<?php echo $post_image; ?>" class="card-img-top p-4 img-fluid  col-xs-w-50  " alt="...">
                <div class="card-body text-center">
                  <h6 class="card-title"><?php echo $post_title; ?></h6>
                  <div class="rating text-warning mb-1">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star-half-alt"></i></span>
                  </div>
                  
                  <a href="book_details.php?id=<?php echo $post_id; ?>" class="btn btn-success d-grid">Read More</a>
                </div>

              </div>
        </div>

         <?php } }?>
          
           </div>
     </div> 
    </section>
          </div>
    
    <!-- End search -->
    <?php include'footer.php';?>