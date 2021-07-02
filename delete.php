<?php 
    include('connect.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM accounts WHERE id='$id'";

    $result = pg_query($con, $sql);
    header('location: admin.php');
?>