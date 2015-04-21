<?php

  $files = glob("uploads/Asia/*.*");

   for ($i=1; $i<count($files); $i++)

  {

  $image = $files[$i];
//$image = str_replace("Bhartiya_Vikas_Janjati_Vidyalaya", "B.V.J._Public_School", $image);

list($image3, $image2) = explode(':', $image);
$image3 = substr($image3, 13, strlen($image3));
$image2 = substr($image2, -strlen($image2), strlen($image2)-4);

$image4 = str_replace("Bhartiya_Vikas_Janjati_Vidyalaya", "B.V.J._Public_School", $image3);

  print "Name: " . $image2 ."<br />";
if (strcmp($image3, "B.V.J._Public_School") == 0){
  print "School: " . "Bhartiya_Vikas_Janjati_Vidyalaya"."<br />";
}
elseif (strcmp($image3, "Saraswati_Shishu_Mandir") == 0){
  print "School: " . "Saraswati_Shishu_Mandir_Inter_College"."<br />";

}
elseif (strcmp($image3, "New_Modern_Public_School") == 0){
  print "School: " . "New_Modern_Public_High_School"."<br />";

}
elseif (strcmp($image3, "Swami_Vivekanand_Junior_School") == 0){
  print "School: " . "Swami_Vivekanand_Uchtar_Madhyamik"."<br />";

}

elseif (strcmp($image3, "Rajkiy_Kannya_Inter_College") == 0){
  print "School: " . "Rajlaxmi_Kanya_Junior_High_School"."<br />";

}
elseif (strcmp($image3, "Shreemati_Usha_Devi_Kanya_High_School") == 0){
  print "School: " . "Shrimati_Usha_Devi_Kanya_Vidyalaya "."<br />";

}
elseif(strcmp($image3, "The_Angeli_School") == 0){
  print "School: " . "The_Anjali_School"."<br />";

}
else {
  print "School: " . $image3 ."<br />";
}

  echo '<img style="width:600px; height:600px;" src="'.$image .'" alt="Random image" />'."<br /><br />";
   }


$target_dir = "uploads/" . $_POST["country"] . "/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//echo "file: " . $target_file . "<br>";
//echo "type: " . $imageFileType . "<br>";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
     //   echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
  //  echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
 //   echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  //  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
       // echo "Sorry, there was an error uploading your file.";
    }

}