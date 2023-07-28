<?php
session_start();
include '../database/connect.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $storyline = mysqli_real_escape_string($conn, $_POST['storyline']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $runtime = mysqli_real_escape_string($conn, $_POST['runtime']);
    $categories = mysqli_real_escape_string($conn, $_POST['categories']);
    $director = mysqli_real_escape_string($conn, $_POST['director']);

    $image = $_FILES['image'];
    $imageTempLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $imageFinalLocation = '../uploadImages/'. $imageName;
    $image_web = 'https://biswas-chayon.xyz/uploadImages/'. $imageName;
    $image_full_path = mysqli_real_escape_string($conn, $image_web);
    move_uploaded_file($imageTempLocation, $imageFinalLocation);

    $sql = "INSERT INTO `crud`(`name`, `storyline`, `rating`, `runtime`, `categories`, `director`, `img`, `img_full_url`) VALUES ('{$name}','{$storyline}','{$rating}','{$runtime}','{$categories}','{$director}','{$imageFinalLocation}','{$image_full_path}')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        $_SESSION['msg_upload'] = 1;
        header('location: ../index.php');
    } else {
        $_SESSION['msg_upload_error'] = 1;
        header('location: add_movie.php');
    }

}





?>