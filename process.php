<?php
 

$target_dir = "uploads/" . $_POST["country"] . "/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}
$schoolname = $_POST["school"];
$personname = $_POST["field1"];
//echo $schoolname;
$target_file = $target_dir . $schoolname . $personname . ":" . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo "file: " . $target_file . "<br>";
echo "type: " . $imageFileType . "<br>";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
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
    echo "Sorry, a piece of art with this name already exists!";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large! Max width and height is 1224px. So the total area is 1,500,000 pixels. Anything with a greater area than that will not upload due to space and storing issues. We're really sorry for any inconveniences.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType !="PNG" && $imageFileType != "JPG" && $imageFileType != "JPEG" && $imageFileType != "GIF") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded." . " Go to freedomnowcampaign.org to return.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }



?>
<html>
<body>
<script>
alert("You're file has been uploaded");
window.location.href = "http://freedomnowcampaign.org";
</script>
</body>
</html>
<?php
} 
?>