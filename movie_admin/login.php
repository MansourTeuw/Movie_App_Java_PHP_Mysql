<?php
session_start();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login |Movie Application</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="the-body">

<!-- Upload message  -->
<?php if(isset($_GET['error_message'])) {?>

    <div class="alert alert-danger alert-dismissible">
        <button type="button" data-dismiss="alert" class="close">&times;</button>
        <strong>Failed to login!</strong> Enter correct username or password.
    </div>

<?php } ?>

<div class="wrapper">
    <form action="login_logic.php" method="POST" class="form-signin w3-indigo">

        <h1 class="w3-center w3-indigo font-weight-bold py-2">Movie Application</h1>
        <h2 class="w3-center w3-deep-orange py-2">Admin Login</h2>

        <input type="text" name="username" placeholder="Username" class="form-control">

        <input type="password" name="password" placeholder="Password" class="form-control">

        <button class="btn btn-l w3-deep-orange btn-block py-2">Login</button>
    </form>
</div>

</body>

</html>