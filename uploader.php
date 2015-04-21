<?php
if( $_FILES['file']['name'] != "" )
{
   copy( $_FILES['file']['name'], "/var/www/html" ) or 
           die( "Could not copy file!");
}
else
{
    die("No file specified!");
}

$dirname = "/uploads/Africa/";
$images = glob($dirname."*.png");
foreach($images as $image) {
echo '<img src="'.$image.'" /><br />';
}
?>
<html>
<head>
<title>Uploading Complete</title>
</head>
<body>
<h2>Uploaded File Info:</h2>
<ul>
<li>Sent file: <?php echo $_FILES['file']['name'];  ?>
<li>File size: <?php echo $_FILES['file']['size'];  ?> bytes
<li>File type: <?php echo $_FILES['file']['type'];  ?>
<?php echo '<img src="'.$image.'" ?>
<p><?php echo "test" ?></p>
<p>test12</p>

</ul>
</body>
</html>