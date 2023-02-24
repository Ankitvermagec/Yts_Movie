<?php 
include_once './header.php';
include_once './navbar.php';
$conn = mysqli_connect('localhost','root','','movie');
$sql ='SELECT * FROM `movie_tb`';
$result =mysqli_query($conn,$sql);
?>

<section class="coder">
  <div class="container">
    <div class="row">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
       static $i = 0;
        echo '<div class="col-lg-2">
        <div style="background: url(./assets/uploads/'.$row['movie_img'].');" onmouseover="details('.$i.')" onmouseleave="details('.$i.')" class="img">
          <div class="details">
          <h1>'.$row['title'].'</h1>
          <p>World</p>
          </div>
        </div>
      </div>';
      $i += 1;
      }
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
</section>





            





<?php include_once './footer.php'?>