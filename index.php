<?php 
session_start();
include_once './header.php';
include_once './navbar.php';

$conn = mysqli_connect('localhost','root','','movie');
$sql ='SELECT * FROM `post_tb`';
$result =mysqli_query($conn,$sql);
$sql2 ='SELECT * FROM `post_tb`';
$result2 = mysqli_query($conn,$sql2);         //it's for carousal

$row_all = mysqli_fetch_all($result2);


?>

<!-- first rule -->


<!-- <section class="coder">
  <div class="container">
    <div class="row">
      <?php
      // while ($row = mysqli_fetch_assoc($result)) {
      //  static $i = 0;
      //   echo '<div class="col-lg-2">
      //   <div style="background: url(./assets/uploads/'.$row['movie_img'].');" onmouseover="details('.$i.')" onmouseleave="details('.$i.')" class="img">
      //     <div class="details">
      //     <h1>'.$row['title'].'</h1>          
      //     <p>World</p>
      //     <a href="dashboard_2?id='.$row['id'].'"><div class="btn btn-dark">view</div></a>
      //     </div>
      //   </div>
      // </div>';
      // $i += 1;
      // }
      ?>
    </div>
  </div>



  <script>
    function details(i) {
      x = document.getElementsByClassName('details')[i].className
      
      if (x == 'details') {
        document.getElementsByClassName('details')[i].className = 'details cc'
        
      }else if (x == 'details cc') {
        document.getElementsByClassName('details')[i].className = 'details'
      } 
      
    }
  </script>
</section> -->

<!-- first rule -->





<!-- second rule -->

<style>
  .movie_{
    padding: 70px 0px 0px 0px;
    background-color: var(--nav_bg);
  }
  /* .movie_ .container{
    box-shadow: 0px 2px 4px gray;
  } */
.movie_ .img{
    background: url(../img/a_b.jpg);
    background-size: cover !important;
    background-position: center !important;
    box-shadow: 0px 0px 6px 1px gray;
    border: 10px solid #fff;
    height: 360px;
    border-radius: 15px;
    margin: 17px;
    color: #fff;
    cursor: pointer;
}
/* .movie_ .img:hover{
    border: 10px solid yellowgreen;
} */
.movie_ .detail{
    display: none;
    background: #9191916c;
    height: 341px;
    border-radius: 7px;
    padding: 20px;
}
 .bb{
  /* background: linear-gradient(orange,yellow); */
  border-bottom: 2px solid white;
}
</style>


<!-- it's for the searching -->

<section class="movie_ bb">
  <div class="container">
    <div class="row">
<?php
    if (isset($_SESSION['row'])) {
      /* var_dump(($_SESSION['row'])); */  
      $row = $_SESSION['row'];
 for ($i=0 ; $i < count($_SESSION['row']); $i++) { 
  echo '<div class="col-lg-3">
  <div onmouseover="show('.$i.')"  onmouseleave="hide('.$i.')" class="img" style="background: url(./assets/uploads/'.$row[$i][3].');">
    <div class="detail">
    <h1>'.$row[$i][1].'</h1>          
    <a href="dashboard_2?id='.$row[$i][0].'"><div class="btn btn-dark">view</div></a>
    </div>
  </div>
</div>';
// $i += 1;

 }
    }
 
 ?>

    </div>
  </div>
</section>


<!-- it's for the searching -->







<section class="movie_">
  <div class="container">
    <div class="row">
    
<?php 
while ($row = mysqli_fetch_assoc($result)) {
  static $i = 0;
  echo '<div class="col-lg-3">
  <div onmouseover="show('.$i.')"  onmouseleave="hide('.$i.')" class="img" style="background: url(./assets/uploads/'.$row['movie_img_name'].');">
    <div class="detail">
    <h1>'.$row['movie_title'].'</h1>          
    <a href="dashboard_2?id='.$row['id'].'"><div class="btn btn-dark">view</div></a>
    </div>
  </div>
</div>';
$i += 1;
}
?>

    </div>
  </div>
  <script>
    function show(i) {
      document.getElementsByClassName('detail')[i].style.display = 'block'
    }
    function hide(i) {
      document.getElementsByClassName('detail')[i].style.display = 'none'
    }
  </script>

</section>


<!-- second rule -->



<section class="coder">
  <div class="container">
    <div class="row">
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">

  
  <?php

$row = mysqli_num_rows($result2);
$row2 = mysqli_fetch_all($result2);
static $k = 0;

for ($i= $row; $i >= 1 ; $i--) { 
  
  if ($row == $i) {
    echo ' <div class="carousel-item active">
    <div class="row">
    ';

    for ($j=1; $j <=4 ; $j++) { 
     
      echo '<div class="col-lg-3">
      <img src="./assets/uploads/'.$row2[$k][3].'" class="d-block w-100" alt="...">
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
       if (isset($row2[$k][3])) {
        echo '<div class="col-lg-3">
        <img src="./assets/uploads/'.$row2[$k][3].'" class="d-block w-100" alt="...">
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
    </div>
  </div>
</section>



<?php include_once './footer.php'?>


<!-- <div style="background:url(./assetes/uploads/'.$row2[$k][3].');  height:200px; background-size:cover !important;"  ></div> -->