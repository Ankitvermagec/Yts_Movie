<!-- <form action="" method="post">
  <input type="text" name="title" id="">
  <input type="file" name="image" id="">
  <input type="text" name="rating" id="">
  <input type="submit" name="submit"  value="submit">
</form> -->

<?php 
// if (isset($_POST['submit'])) {
//   $title =  $_POST['title'];
//   $image =  $_POST['image'];
//   $rating =  $_POST['rating'];

//   $conn =mysqli_connect('localhost','root','','movie');
//   $sql='INSERT INTO `movie_tb`(`title`, `movie_img`, `rating`) VALUES ("'.$title.'","'.$image.'","'.$rating.'")';
//   $result=mysqli_query($conn,$sql);

// } else {
//   echo 'not working';
// }
?>

<form action="" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="text" name="title" id="">
  <input type="text" name="rating" id="">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>





<?php
if (isset($_POST['submit'])) {

  $title =  $_POST['title'];
  $rating =  $_POST['rating'];

  
$target_dir = "./assets/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$image = basename($_FILES["fileToUpload"]["name"]);
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

    $conn =mysqli_connect('localhost','root','','movie');
    $sql='INSERT INTO `movie_tb`(`title`, `movie_img`, `rating`) VALUES ("'.$title.'","'.$image.'","'.$rating.'")';
    $result=mysqli_query($conn,$sql);





  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
} else {
  echo'nikl le';
}
?>