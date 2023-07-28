<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Application</title>

<!--    from w3school-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- add bootstrap 5 css file -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">


</head>
<body>
<!--this section is for application heading-->
    <div class="container-fluid">
        <h1 class="w3-indigo w3-center py-4 font-weight-bold">
            Movie Application
        </h1>
    </div>
<!--this section is for adding movie button and logout-->
    <div class="container-fluid">
        <a href="actions/add_movie.php" class="btn w3-indigo my-2 font-weight-bold">Add Movie</a>
        <a href="logout.php" class="btn w3-deep-orange my-2 font-weight-bold float-right">Logout</a>
    </div>

<!--this section is for html table -->
<div class="container-fluid w3-center">
    <table id="table_id" class="w3-table-all">
        <thead>
        <tr>
            <th>Name</th>
            <th>Storyline</th>
            <th>Rating</th>
            <th>Runtime</th>
            <th>Categories</th>
            <th>Director</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
<!--        php logic to show data from the database -->
        
        <?php
        include 'database/connect.php';
        $sql = "SELECT * FROM `crud` ";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $storyline = $row['storyline'];
                $rating = $row['rating'];
                $runtime = $row['runtime'];
                $categories = $row['categories'];
                $director = $row['director'];
                $img = $row['img']; ?>

                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $storyline ?></td>
                    <td><?php echo $rating ?></td>
                    <td><?php echo $runtime ?></td>
                    <td><?php echo $categories ?></td>
                    <td><?php echo $director ?></td>
                    <td>
                        <img src="uploadImages/<?php echo $img?>" width="150px" height="216px" alt="<?php echo $name?>">
                    </td>
                    <!-- This section is for the actions buttons -->
                    <td id="btnAction">
                        <a href="actions/view.php?viewid=<?php echo $id?>" class="w3-button w3-blue w3-round-xlarge">ViewIt</a><br><br>

                        <a href="actions/update.php?updateid=<?php echo $id?>" class="w3-button w3-green w3-round-xlarge">Update</a><br><br>
                        <a href="actions/delete.php?deleteid=<?php echo $id?>" class="w3-button w3-red w3-round-xlarge">Delete</a>
                    </td>
                </tr>

            <?php } ?>
            <?php } ?>









    </table>
</div>


<!-- add bootstrap 4 js file -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>





<!-- add bootstrap 5 js file -->

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> -->

<!-- add bundel js -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->

</body>
</html>