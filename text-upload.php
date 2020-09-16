<?php


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["textfile"]["name"]);

$uploadok = 1;
$textfiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//check if file is fake or not
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES["textfile"]["tmp_name"]);
    
    if ($check !== false) {
        echo "File is text -" . $check["mime"]. ".";
        $uploadok = 1;
    } else {
        echo "File is not text.";
        $uploadok = 0;
    }
}
if (file_exists($target_file)) {
    echo ("Sorry file already exits.");
    $uploadok = 0;
}
if ($_FILES["textfile"]["size"] > 900000) {
    echo ("Sorry your file is too large.");
    $uploadok = 0;
}

if ($textfiletype != "txt" &&  $textfiletype != "html") {
    echo ("Sorry only TXT and HTML file supported.");
    $uploadok = 0;
}

if ($uploadok == 0) {
    echo ("Sorry your file was not uploaded.");
} else {
    if (move_uploaded_file($_FILES["textfile"]["tmp_name"], $target_file)) {
        echo ("File" . basename($_FILES["textfile"]["name"]) . "has been uploaded.");
    } else {
        echo ("Sorry  there was an error uploading your file.");
    }
}
