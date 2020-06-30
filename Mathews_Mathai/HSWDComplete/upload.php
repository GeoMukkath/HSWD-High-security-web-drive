<?php
$file = $_FILES["file"];

move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]); // for saving file in uploads folder
header("Location: index.php");

?>