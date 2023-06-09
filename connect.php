<?php

session_start();

$conn = mysqli_connect('localhost','root','','movie');

if (isset($_GET['id'])) {
  $sql = 'SELECT * FROM login_tb WHERE id = "'.$_GET['id'].'"';
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);    
  if ($row['status']) {
      $sql = 'UPDATE `login_tb` SET `status` = "0" WHERE id = "'.$_GET['id'].'"';
  mysqli_query($conn, $sql);
  
  } else {
      $sql = 'UPDATE `login_tb` SET `status` = "1" WHERE id = "'.$_GET['id'].'"';
  mysqli_query($conn, $sql);
  }
  header('location:dashboard');
}
elseif (isset($_POST['Registeration'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $pass = $_POST['pass'];
  $status = 0;
  $update_count = 0;
  $sql = 'INSERT INTO `login_tb`(`username`, `email`, `mobile`, `password`,`status`, `update_count`) VALUES ("'.$username.'","'.$email.'","'.$mobile.'","'.$pass.'","'.$status.'","'.$update_count.'")';
  $result =mysqli_query($conn,$sql);
  header('location:index');
//   echo 'completed';
}elseif (isset($_POST['Login'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass2'];
  $superAdmin_email='admin@gmail.com';
  $superAdmin_pass ='123';

  $sql = 'SELECT * FROM `login_tb` WHERE `email`="'.$email.'" && `password`="'.$pass.'" &&  `status`= 1';
  $result = mysqli_query($conn,$sql);
  $row = mysqli_num_rows($result);
//   var_dump($row);
  if ($superAdmin_email == $email && $superAdmin_pass == $pass) {
    $_SESSION['superadmin'] = 'super@admin.com';
    header('location:dashboard');
  } elseif ($row) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['row']=$row['id'];
    header('location:post');
    // header('location:post?post="'.$row['id'].'"');
  }else {
    echo'<h1>404 page</h1>';
  }
  


}elseif (isset($_POST['submit']) & isset($_SESSION['row'])) {

  echo $title = $_POST['Title'];

  

  $string = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace('-', '', $title));

  $target_dir = "./assets/uploads/";
  $target_file = $target_dir.basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // start:  file rename
  $fileName = basename($_FILES["image"]["name"]);
  $fileNameNoExtension = preg_replace("/\.[^.]+$/", "", $fileName);
  $newfilename = $string . rand(0000,9999) . '.' . $imageFileType;         //string(variable) is coming from preg_replace
  // end: file rename
  $target_file = $target_dir.basename($newfilename);
  echo $img_name = basename($newfilename);



  $lang1 = $lang2 = $lang3 = $lang4 = $lang5  = '';
  if (isset($_POST['English'])) {
   $lang1 = $_POST['English'];
  }
  if (isset($_POST['Hindi'])) {
   $lang2 = $_POST['Hindi'];
  }
  if (isset($_POST['South'])) {
   $lang3 = $_POST['South'];
  }
  if (isset($_POST['Chinese'])) {
   $lang4 = $_POST['Chinese'];
  }
  if (isset($_POST['Other'])) {
   $lang5 = $_POST['Other'];
  }

  // echo $lang =  "'$lang1','$lang2','$lang3','$lang4','$lang5'";

  $lang = array($lang1,$lang2,$lang3,$lang4,$lang5);
  $lang = array_diff($lang,array(''));
  $lang = implode(", ", $lang);
  var_dump($lang);

  echo $Movie_Year = $_POST['Movie_Year'];
  echo $Rating = $_POST['Rating'];
  
  $gener1 = $gener2 = $gener3 = $gener4 = $gener5 = $gener6 = $gener7 = $gener8 = $gener9 = $gener10 = $gener11 = $gener12 = '';

  if (isset($_POST['Action'])) {
    $gener1 = $_POST['Action'];
  }
  if (isset($_POST['Adventure'])) {
    $gener2 = $_POST['Adventure'];
  }
  if (isset($_POST['Comedy'])) {
    $gener3 = $_POST['Comedy'];
  }
  if (isset($_POST['Crime'])) {
    $gener4 = $_POST['Crime'];
  }
  if (isset($_POST['Fantasy'])) {
    $gener5 = $_POST['Fantasy'];
  }
  if (isset($_POST['Family'])) {
    $gener6 = $_POST['Family'];
  }
  if (isset($_POST['Animation'])) {
    $gener7 = $_POST['Animation'];
  }
  if (isset($_POST['Drama'])) {
    $gener8 = $_POST['Drama'];
  }
  if (isset($_POST['Romance'])) {
    $gener9 = $_POST['Romance'];
  }
  // if (isset($_POST['Animation'])) {
  //   $gener10 = $_POST['Animation'];
  // }
  if (isset($_POST['Sci-Fi'])) {
    $gener10 = $_POST['Sci-Fi'];
  }
  if (isset($_POST['Horror'])) {
    $gener11 = $_POST['Horror'];
  }
  if (isset($_POST['Sport'])) {
    $gener12 = $_POST['Sport'];
  }
  
//  echo  $gener = "'$gener1','$gener2','$gener3','$gener4','$gener5','$gener6','$gener7','$gener8','$gener9','$gener10','$gener11','$gener12','$gener13'";

  $gener = array($gener1,$gener2,$gener3,$gener4,$gener5,$gener6,$gener7,$gener8,$gener9,$gener10,$gener11,$gener12);
  $gener = array_diff($gener,array(''));
  $gener= implode(", ", $gener);
  var_dump($gener);


 echo  $Movie_Cast = $_POST['Movie_Cast'];
 echo   $state = $_POST['Film_Industry'];
  echo $upload_id = $_SESSION['row'];

  if (isset($_POST['Link_url'])) {
  echo  $Link_url = $_POST['Link_url'];
  } else {
   echo $Link_url = 'king';
  }
   

  date_default_timezone_set("Asia/Calcutta"); //India time (GMT+5:30)
echo   $upload_dateTime = date('d-M-Y h:i:sa');




  
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

 
  
  $sql =  'INSERT INTO `post_tb`(`movie_title`, `upload_id`, `movie_img_name`, `movie_language`, `movie_year`, `movie_rating`, `movie_genre`, `movie_cast`, `movie_state`, `upload_dateTime`) VALUES ("'.$title.'","'.$upload_id.'","'.$img_name.'","'.$lang.'","'.$Movie_Year.'","'.$Rating.'","'.$gener.'","'.$Movie_Cast.'","'.$state.'","'.$upload_dateTime.'")';
    mysqli_query($conn, $sql);
    // echo 'its working';

  $sql = 'INSERT INTO `movie_link`(`user_id`, `link`) VALUES ("'.$upload_id.'","'.$Link_url.'")';
  mysqli_query($conn, $sql);

  $sql ='UPDATE `login_tb` SET `update_count` = update_count +1 WHERE `login_tb`.`id` = "'.$upload_id.'"';
  mysqli_query($conn, $sql);

  }
}elseif (isset($_POST['search_value'])) {
  // echo $_POST['word'];
  $conn = mysqli_connect('localhost','root','','movie');

  $sql = 'SELECT * FROM `post_tb` WHERE `movie_title` LIKE "%'.$_POST['word'].'%" OR `movie_state` LIKE "%'.$_POST['word'].'%"';
  $result= mysqli_query($conn,$sql);

  $row = mysqli_fetch_all($result);
  $_SESSION['row'] = $row;
  header('location:index.php');

}
else {
    echo 'not working';
}



?>
