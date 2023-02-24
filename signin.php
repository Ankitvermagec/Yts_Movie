<?php include_once './header.php'?>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post">
                <input type="text" name="email" placeholder="email" id=""><br><br>
                <input type="text" name="password" placeholder="password" id=""><br><br>
                <input type="submit" name="signin" value="signin">
                <input type="button" value="register" data-bs-toggle="modal" data-bs-target="#exampleModal">
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once './footer.php'?>

<section>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <input type="text" name="email" placeholder="email" id=""><br><br>
        <input type="password" name="password" placeholder="password" id=""><br><br>
        <input type="submit" name="register" value="register">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
   </div>
</section>


<?php 
$conn =mysqli_connect('localhost','root','','movie');
if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(isset($_POST['signin'])) {
        $sql = 'SELECT * FROM `admin_tb` WHERE `email` = "'.$email.'" AND `password`= "'.$pass.'"';
        $result =mysqli_query($conn,$sql);
        header('location:index');
        // $row =mysqli_fetch_assoc($result);
        // var_dump($row);
        // echo 'registered';
    }else {
        // echo ' not registered';
        // $sql = 'SELECT * FROM `register_tb` WHERE `email` = "'.$email.'" AND `password`= "'.$pass.'"';
        // $result =mysqli_query($conn,$sql);

        // Header('Location:index.php');
        // $sql = 'SELECT * FROM facebook_tb1 WHERE `email` = "'.$email.'" AND `password`= "'.$pass.'"';
    }
    
} elseif (isset($_POST['register']))  {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql ='INSERT INTO `register_tb`(`email`, `password`) VALUES ("'.$email.'","'.$pass.'")';
    $result =mysqli_query($conn,$sql);

}

?>