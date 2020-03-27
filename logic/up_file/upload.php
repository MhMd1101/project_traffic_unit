<?php
// echo '<pre>';
// print_r($_FILES);
// echo '</pre>';


if (!$_FILES['person']['error']) {
    $fileName = $_FILES['person']['name'];
    $fileTemp = $_FILES['person']['tmp_name'];
    $fileSize = $_FILES['person']['size'];
    $destination = '../../uploade/images';
    $savedPhoto = $destination . $fileName;
    if (move_uploaded_file($fileTemp, $savedPhoto)) {
        echo "File uploaded successfully <br>";
    } else {
        echo "Error on Uploading <br>";
    }
}

if (!$_FILES['national_id']['error']) {
    $fileName = $_FILES['national_id']['name'];
    $fileTemp = $_FILES['national_id']['tmp_name'];
    $fileSize = $_FILES['national_id']['size'];
    $destination = '../../uploade/images';
    $savedPhoto = $destination . $fileName;
    if (move_uploaded_file($fileTemp, $savedPhoto)) {
        echo "File uploaded successfully <br>";
    } else {
        echo "Error on Uploading <br>";
    }
}

if (!$_FILES['qualification']['error']) {
    $fileName = $_FILES['qualification']['name'];
    $fileTemp = $_FILES['qualification']['tmp_name'];
    $fileSize = $_FILES['qualification']['size'];
    $destination = '../../uploade/images';
    $savedPhoto = $destination . $fileName;
    if (move_uploaded_file($fileTemp, $savedPhoto)) {
        echo "File uploaded successfully <br>";
    } else {
        echo "Error on Uploading <br>";
    }
}

if (!$_FILES['Health']['error']) {
    $fileName = $_FILES['Health']['name'];
    $fileTemp = $_FILES['Health']['tmp_name'];
    $fileSize = $_FILES['Health']['size'];
    $destination = '../../uploade/images';
    $savedPhoto = $destination . $fileName;
    if (move_uploaded_file($fileTemp, $savedPhoto)) {
        echo "File uploaded successfully <br>";
    } else {
        echo "Error on Uploading <br>";
    }
}
echo "<br>";
echo "<a class='btn btn-success text-center' href='../../html/index.php'> Back Index Page </a>";
