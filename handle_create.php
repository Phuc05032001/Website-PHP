<?php 
    include('connect.php');

    if(isset($_POST['submit']) ) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO accounts (name, username, password) VALUES ('$name', '$username', '$password')";
        $result = pg_query($con, $sql);
        header('location: admin.php');
    }

?>