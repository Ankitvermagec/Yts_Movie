<?php 
include_once './header.php';
/* include_once './navbar.php'; */
$conn = mysqli_connect('localhost','root','','movie');
$sql ='SELECT * FROM `post_tb` ';
$result =mysqli_query($conn,$sql);  
$row_all = mysqli_fetch_all($result);
?>

<style>
    .coder .img {
        height: 320px;
        background: gray;
        background-size: cover !important;
    }
</style>




<section class="coder">
<div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
static $k = 0;

$row = count($row_all);

for ($i= $row; $i >= 1 ; $i--) { 
  
  if ($row == $i) {
    echo ' <div class="carousel-item active">
    <div class="row">
    ';

    for ($j=1; $j <=4 ; $j++) { 
     
      echo '<div class="col-lg-3">
      <div class="img" style="background:url(./assets/uploads/'.$row_all[$k][3].');"></div>
      </div>';
      $k += 1 ;
  }   
    
    echo '
  </div>
    
  </div>';
  } else {
    echo ' <div class="carousel-item">
    <div class="row">
    ';

    for ($j=1; $j <=4 ; $j++) { 
       if (isset($row_all[$k][3])) {
        echo '<div class="col-lg-3">
        <div class="img" style="background:url(./assets/uploads/'.$row_all[$k][3].');"></div>
        </div>';
       }
     
      $k += 1 ;
  }   
    
    echo '
  </div>
    
  </div>';
  }
  
    
  $i -= 3;
}

?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>




<?php include_once './footer.php'?>