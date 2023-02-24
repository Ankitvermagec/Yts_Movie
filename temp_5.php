<form action="" method="post">

<input type="text" name="word" id="myInput" placeholder="&#128269">
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
//   print_r($row);
  var_dump($row);
//   while ($row = mysqli_fetch_assoc($result)) {
//     var_dump($row);
//   }
  
  
} else {
    echo 'not yet';
}

?>
