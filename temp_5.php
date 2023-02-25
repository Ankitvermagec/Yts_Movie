<?php 
include_once './header.php';
// include_once './navbar.php';
?>

<form action="" method="post">

<input type="text" name="word" id="myInput" placeholder="&#128269" class="form-control bg-danger w-25">
<input type="submit" name="search" value="search"  id="myBtn"  hidden>

<script>
var input = document.getElementById("myInput");
input.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("myBtn").click();
  }
});
</script>
</form>


<?php 
if (isset($_POST['search'])) {
//   echo  $_POST['word'];

  $conn = mysqli_connect('localhost','root','','movie');

  $sql = 'SELECT * FROM `post_tb` WHERE `movie_title` LIKE "%'.$_POST['word'].'%" OR `movie_state` LIKE "%'.$_POST['word'].'%"';
  $result= mysqli_query($conn,$sql);

  $row = mysqli_fetch_all($result);
  // var_dump($row);
  
} else {
    echo 'not yet';
}

?>





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
</style>

<section class="movie_">
  <div class="container">
    <div class="row">
<?php
    
    $result3= mysqli_query($conn,$sql);
  $cp = count(mysqli_fetch_all($result3));
  
 for ($i=0 ; $i < $cp; $i++) { 
  // echo $i."<h1>hello</h1>";
  // static $i = 0;
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


<?php include_once './footer.php'?>