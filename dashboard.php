<?php include_once './header.php';
session_start();



if (isset($_SESSION['superadmin'])) {
    include_once './navbar.php';
    // echo 'its';
    // session_unset();
} else {
    header('location:index');
}

?>
<style>
    .dashboard h4{
    box-shadow: 0px 2px 4px grey;
    padding: 10px;
    margin: 0px 35px 0px 35px;
    border-radius: 25px 25px 25px 25px;
    color: #f8f9fa;
    }
    .dashboard .count{
    box-shadow: 0px 2px 4px grey;
    padding: 7px;
    border-radius: 7px;
    margin: 10px 0px 5px 0px;
    }
</style>

<section class="dashboard">
    <div class="container">
        <div class="row">
        <?php 
$conn = mysqli_connect('localhost','root','','movie');
$sql ='SELECT * FROM `login_tb`';
$result =mysqli_query($conn,$sql);

while ($row= mysqli_fetch_assoc($result)) {
    // var_dump($row);
    echo ' <div class="col-lg-3 col-6 mt-2">
    <div class="context" >
        <h4>'.$row['username'].'</h4>
        <p>'.$row['email'].'</p>
        <p>'.$row['mobile'].'</p>
        <a href="connect?id='.$row['id'].'">
        ';
        if ($row['status']) {
            echo '<button class="btn btn-warning">Active</button>';
        } else {
            echo '<button class="btn btn-danger">Unactive</button>';
        }
        echo '
        </a>
        <div class="count bg-light">Totle_Count:='.$row['update_count'].'</div>
    </div>
</div>';
}
?>


<!-- method 2 -->

<?php 
$conn = mysqli_connect('localhost','root','','movie');
$sql ='SELECT * FROM `login_tb`';
$result =mysqli_query($conn,$sql);

while ($row= mysqli_fetch_assoc($result)) {
    // var_dump($row);
    echo ' <div class="col-lg-3 col-6 mt-2">
    <div class="context" >
        <h3>'.$row['username'].'</h3>
        <p>'.$row['email'].'</p>
        <p>'.$row['mobile'].'</p>';
        if ($row['status']) {
            echo'<a onclick=" return confirm()"  href="connect?id='.$row['id'].'"><button class="btn btn-warning">Active</button></a>';
        } else {
            echo'<a onclick=" return confirm()"  href="connect?id='.$row['id'].'"><button class="btn btn-danger">Disactive</button></a>';
        }
        echo '
    </div>
</div>';
}
?>

<!-- method 2 -->

        </div>
    </div>
</section>









<?php include_once './footer.php'?>