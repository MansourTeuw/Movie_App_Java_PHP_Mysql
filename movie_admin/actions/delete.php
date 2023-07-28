<?php
session_start();

include '../database/connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `crud` WHERE `id` = '$id'";

    $result = mysqli_query($conn, $sql);

    if($result) {
        $_SESSION['msg_delete'] = 1;
        header('location: ../index.php');
    } else {
        die(mysql_error($conn));
    }

}

?>