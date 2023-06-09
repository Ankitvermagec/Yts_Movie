<?php include_once './header.php';
include_once './navbar.php';

if (isset($_GET['id'])) {
    
    $conn = mysqli_connect('localhost','root','','movie');
    $sql = 'SELECT * FROM `post_tb` WHERE id = "'.$_GET['id'].'"';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    $dash_2 = $row;
    
    // echo $_GET['id'];
} else {
    // echo 'not ';
    header('location:index');
 }

?>


<?php 
if (isset($dash_2)) {
    echo '
    <section class="dash_2" style="background: url(./assets/uploads/'.$dash_2['movie_img_name'].');">
<div class="dash_3">
<div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="img" style="background: url(./assets/uploads/'.$dash_2['movie_img_name'].');"></div>
                <a target="_blank" href="download?id='.$dash_2['id'].'"><div class="btn btn-success form-control my-2"><i class="fa fa-edit"></i>DOWNLOAD</div></a>
                <div class="btn btn-danger form-control">Watch Now</div>
        </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="cc">
                    <div class="ca">'.$dash_2['movie_title'].'</div>
                    <div class="ca">'.$dash_2['movie_rating'].'</div>
                    <div class="ca">'.$dash_2['movie_year'].'</div>
                    <div class="ca">'.$dash_2['movie_state'].'</div>
                    <div class="ca">'.$dash_2['movie_genre'].'</div>
                    <div class="ca">'.$dash_2['movie_cast'].'</div>                
                </div>
            </div>
        </div>
    </div>
</div>

</section>
    ';
} else {
    echo 'not getting dashboard_2';
}

?>


<a onclick="return confirm('down')" target="_blank" href="./assets/img/a_a.jpg"><div class="btn btn-success form-control my-2"><i class="fa fa-edit"></i>DOWNLOAD</div></a>

<style>
    .v_hide{
        display: none;
    }
    /* .v_show{
        display: block;
    } */
</style>

<section>
    <div class="container">
    <button onclick="video()">ankit</button>
<div class="row ">
    <div class="v_hide">
        <h5>hello ankit</h5>
        <video src="./assets/videos/chills.mp4"  controls ></video>
    </div>
</div>

<script>
    function video() {
      x = document.getElementsByClassName('v_hide')[0].style.display
        // document.write(x)
        if (x == '') {
            document.getElementsByClassName('v_hide')[0].style.display = 'block'
        } else if (x == 'block') {
            document.getElementsByClassName('v_hide')[0].style.display = ''
        }
    }
</script>
    </div>
</section>





<?php include_once './footer.php'?>