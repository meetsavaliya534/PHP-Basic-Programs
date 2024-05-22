<!-- create login file and perform crud operation using pdo -->
<?php
    include 'dbconfig.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = $pdo->query($sql);
    $row = $result->fetch();
    if($row['username'] == $username && $row['password'] == $password){
        header('location:login.php');
    }else{
        header('location:login.php');
    }