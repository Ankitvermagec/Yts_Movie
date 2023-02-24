<?php

// $row = 13;
// for ($i= $row; $i >= 1 ; $i--) { 
//     for ($j=1; $j <=4 ; $j++) { 
//         // $row = mysqli_fetch_assoc($result);

//         echo '$row[] </br>';
//     }
//   $i -= 3;
// }

?>


<?php 
$conn = mysqli_connect('localhost','root','','movie');
$sql ='SELECT * FROM `post_tb`';
$result2 =mysqli_query($conn,$sql);

$row2 = mysqli_fetch_all($result2);

echo $row2[0][3];
echo $row2[1][3];
echo $row2[2][3];
echo $row2[2][3];
?>

