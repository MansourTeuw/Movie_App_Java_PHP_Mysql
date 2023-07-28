<?php

include 'database/connect.php';

$sql = "SELECT * FROM crud";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);










?>