<?php 
    include('connect.php');

    if(isset($_POST['submit']) ) {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "UPDATE accounts
        SET name = '$name', username= '$username', password='$password'
        WHERE id = $id";

        $result = pg_query($con, $sql);
        header('location: admin.php');
    }
    header('location: admin.php');

?>