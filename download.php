<style>
    video{
        display: flex;
        height: 480px;
        margin: auto;
    }
</style>


<?php
$conn = mysqli_connect('localhost','root','','movie');
$sql = 'SELECT * FROM `movie_link` WHERE id = "'.$_GET['id'].'"';
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    // var_dump($row);
    echo '<video controls src="'.$row['link'].'"></video>';
    header('location:'.$row['link'].'');
}
?>

<!-- id is not matchable from the link id -->