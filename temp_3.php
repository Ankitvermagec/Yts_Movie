<!-- <!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html> -->


<!DOCTYPE html>
<html>
<style>
  body{
    background: none;
  }
  .cc{
     background: black;
     color: #fff;
  }
</style>

<body class="cd">

<button onclick="as()">dark</button>
<!-- <button onclick="ad()">light</button> -->
<script>
function as() {
 x = document.getElementsByClassName('cd')[0].className
// document.write(x)
if (x == 'cd') {
  document.getElementsByClassName('cd')[0].className = 'cd cc'
} else if (x == 'cd cc') {
  document.getElementsByClassName('cd')[0].className = 'cd'
}
}
</script>



<video width="400" 
           height="350" 
           controls poster=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png">
        <source src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200409094356/Placement100-_-GeeksforGeeks2.mp4"
                type="video/mp4">
    </video>


<video onclick="enableAutoplay(0)" ondblclick="disableAutoplay(0)" poster="./assets/img/ankit_profile.jpg" name="myVideo" width="220px">
  <source controls="controls" src="./assets/videos/chills.mp4" >
</video>
<video onclick="enableAutoplay(1)" ondblclick="disableAutoplay(1)" poster="./assets/img/ankit_profile.jpg" name="myVideo" width="220px">
  <source controls="controls" src="https://www.youtube.com/embed/Ev4GOeRcUVU" >
</video>


<video src="https://www.youtube.com/embed/Ev4GOeRcUVU" controls></video>

<script>
  
  function enableAutoplay(i) {
    var vid = document.getElementsByName("myVideo")[i];
    vid.autoplay = true;
    vid.load();
  }

  function disableAutoplay(i) {
    var vid = document.getElementsByName("myVideo")[i];
    vid.autoplay = false;
    vid.load();
  }

  /* function checkAutoplay(i) {
    var vid = document.getElementsByName("myVideo")[i];
    alert(vid.autoplay);
  } */
</script>

<!-- <iframe onclick="enableAutoplay(2)" ondblclick="disableAutoplay(2)" width="560" height="315"  poster="./assets/img/ankit_profile.jpg" name="myVideo"  src="https://www.youtube.com/embed/Ev4GOeRcUVU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->


<video src="https://rr2---sn-8vq54voxpo-pqgs.googlevideo.com/videoplayback?expire=1675186645&ei=dP3YY-XdPJTivwTx0YRI&ip=2402%3A8100%3A2704%3Aa4dc%3A11fe%3A7a%3Ac62e%3A8fe1&id=o-AP9V1jEj2v3lMcchk_aDvVMZAf2vwcqJjQf_7-p-3xZq&itag=135&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278%2C394%2C395%2C396%2C397%2C398%2C399&source=youtube&requiressl=yes&mh=4-&mm=31%2C29&mn=sn-8vq54voxpo-pqgs%2Csn-cvh7knsz&ms=au%2Crdu&mv=m&mvi=2&pl=48&pcm2=yes&initcwndbps=310000&spc=H3gIhsKrA3bEJdUwIcHtsPQjN5AL7oc&vprv=1&mime=video%2Fmp4&ns=_BJ6S6KVhR1mWW6WXRjyoA8L&gir=yes&clen=13552610&dur=361.040&lmt=1675087667633235&mt=1675164552&fvip=1&keepalive=yes&fexp=24007246&c=WEB&txp=5535434&n=9GqStv1-1iQyuQ&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cpcm2%2Cspc%2Cvprv%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRAIgdWGrdMZG7B247lqr4DNl8MzS44p2DEymSqRUFRfZ-k0CIHponjQq1NdiBq9zqpX_vu79LA0H_Y-U5hBiYDUL0SRa&sig=AOq0QJ8wRQIgZeaZbYVMnV3lk3u8gCEv__GI5CNxdjwIH_z2Z21PrVgCIQDpcskzH02VjZ-iVVN_6YRqDmjpz8cEufov110DVJcxHw%3D%3D&pot=D9n2Zxm9KEtQ2c7Ru5awN55-sldz5FpI1E25TKvT__WNxeDti8ucKQ2dRduKIuTLxMQCqC3Fm12un9uRpcOjujNF_r_VyBgft8z1CFCCVgBgpcpShpcPS2pj_4Tjqm2605maaJQ%3D" controls></video>

<form action="" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  Select video to upload:
  <input type="file" name="fileToUpload2" id="fileToUpload2">
  <input type="submit" value="Upload_v_i  " name="Upload_v_i">
</form>

</body>
</html>



<?php
if (isset($_POST['Upload_v_i'])) {

/* it's for image uploading */
$target_dir = "./assets/temp_3_img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["Upload_v_i"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, image already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your image is too large.";
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
  echo "Sorry, your image was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your image.";
  }
}


  /* it's for video uploading */
    $target_dir = "./assets/videos/";
$target_file = $target_dir.basename($_FILES["fileToUpload2"]["name"]);
$uploadOk = 1;
$videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, video already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload2"]["size"] > 5000000000) {
  echo "Sorry, your video is too large.";
  $uploadOk = 0;
}


// if($type!='mp4' && $type!='3gp' && $type!='avi'){
//     echo "Only mp4,3gp,avi file format are allowed to Upload";
//     $errors=0;



// Allow certain file formats
if($videoFileType != "mp4" && $videoFileType != "3gp" && $videoFileType != "avi"
&& $videoFileType != "gif" ) {
  echo "Sorry, only mp4, 3gp, avi & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your video was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload2"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your video.";
  }
}
} else {
    echo'its not working ankit';
}

?>