<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Movie</title>

<!--    from w3school-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- add bootstrap 5 css file -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">


</head>
<body>
    <div class="container my-5">
        <a href="../index.php" class="btn btn-danger my-2 font-weight-bold">Back</a>

        <h1 class="w3-indigo w3-center py-4 font-weight-bold">Add Movie</h1>

        <!-- Upload error message  -->
        <?php if(isset($_SESSION['msg_upload_error'])) {?>

            <div class="alert alert-danger alert-dismissible">
                <button type="button" data-dismiss="alert" class="close">&times;</button>
                <strong>Not Uploaded!</strong>Something went wrong!
            </div>

        <?php } ?>

        <form action="add_movie_action.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" class="font-weight-bold">Name</label>
                <input type="text" class="form-control" placeholder="Enter movie name" name="name">
            </div>

            <div class="form-group">
                <label for="storyline" class="font-weight-bold">Storyline:</label>
                <textarea name="storyline" id="storyline" rows="10" class="form-control" placeholder="Enter movie description" ></textarea>
            </div>

            <div class="form-group">
                <label for="rating" class="font-weight-bold">Rating</label>
                <input type="text" id="rating" class="form-control" placeholder="Enter movie rating" name="rating">
            </div>

            <div class="form-group">
                <label for="runtime" class="font-weight-bold">Runtime</label>
                <input type="text" id="runtime" class="form-control" placeholder="Enter movie runtime" name="runtimes">
            </div>

            <div class="form-group">
                <label for="categories" class="font-weight-bold">Categories</label>
                <input type="text" id="categories" class="form-control" placeholder="Enter movie categories" name="categories">
            </div>

            <div class="form-group">
                <label for="director" class="font-weight-bold">Director</label>
                <input type="text" id="director" class="form-control" placeholder="Enter movie director" name="director">
            </div>
            <div class="form-group">
                <label for="img" class="font-weight-bold">Image</label>
                <input type="file" id="img" class="form-control"  name="image">
            </div>
            <button type="submit" class="btn btn-primary my-2 font-weight-bold" name="submit">Add Movie</button>
        </form>
    </div>

    
    
</body>
</html>
<?php unset($_SESSION['msg_upload_error']); ?>