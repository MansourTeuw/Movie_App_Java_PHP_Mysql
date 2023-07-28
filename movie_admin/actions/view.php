<?php
include '../lock.php';


$id = $_GET['viewid'];

$sql = "SELECT * FROM `crud` WHERE `id` ='{$id}'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


$name_prev = $row['name'];
$storyline_prev = $row['storyline'];
$rating_prev = $row['rating'];
$runtime_prev = $row['runtime'];
$categories_prev = $row['categories'];
$director_prev = $row['director'];
$image_prev = $row['img'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Movie |Movie Application</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<div class="container my-5">
    <a href="../index.php" class="btn btn-danger my-2 font-weight-bold">Back</a>

    <h1 class="w3-indigo w3-center py-4 font-weight-bold">View Movie Details</h1><br>

    <form class="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="font-weight-bold">Name</label>
            <input type="text" class="form-control" placeholder="Enter movie name" name="name"
                   value="<?php echo $name_prev ?>">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Storyline:</label>
            <textarea class="form-control" name="storyline" id="" cols="30" rows="10"
                      placeholder=" Enter movie description"><?php echo $storyline_prev ?></textarea>
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Rating</label>
            <input type="text" class="form-control" placeholder="Enter movie rating" name="rating"
                   value="<?php echo $rating_prev ?>">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Runtime</label>
            <input type="text" class="form-control" placeholder="Enter movie runtime" name="runtime"
                   value="<?php echo $runtime_prev ?>">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Categories</label>
            <input type="text" class="form-control" placeholder="Enter movie categories" name="categories"
                   value="<?php echo $categories_prev ?>">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Director</label>
            <input type="text" class="form-control" placeholder="Enter movie director" name="director"
                   value="<?php echo $director_prev ?>">
        </div>

        <div class="form-group">

            <img src="../uploadImages/<?php echo $image_prev?>" alt=""><br><br>





    </form>


</div>

</body>

</html>