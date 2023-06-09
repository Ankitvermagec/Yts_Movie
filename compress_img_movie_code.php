<?php
// image compression code

// get the temporary path of the uploaded image
$tmp_path = $_FILES["image"]["tmp_name"];
$image = imagecreatefromstring(file_get_contents($_FILES['image']['tmp_name']));
$width = imagesx($image);
$height = imagesy($image);

$maxWidth = 512;
$maxHeight = 512;
$ratio = $width/$height;

if ($width > $height) {
  $newWidth = $maxWidth;
  $newHeight = $maxWidth/$ratio;
} else {
  $newHeight = $maxHeight;
  $newWidth = $maxHeight*$ratio;
}

// set the desired width and height of the resized image
$width = $newWidth;
$height = $newHeight;

// read the image data
$src = imagecreatefromjpeg($tmp_path);

// create a new image with the desired size
$dst = imagecreatetruecolor($width, $height);

// copy and resize the image data from the original image to the new image
imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, imagesx($src), imagesy($src));

// specify the permanent location to save the resized image
/*  $permanent_path = "./assets/uploads/SpiderMan33412.jpg"; */
$permanent_path = "./assets/uploads".$img_name;
// save the resized image
imagejpeg($dst, $permanent_path);

// clean up memory
imagedestroy($src);
imagedestroy($dst);

// image compression code


?>