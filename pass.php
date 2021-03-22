<?php

use function PHPSTORM_META\type;

require 'partials/_db-connect.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['change-pass']) && $_POST['change'] == 'Change'){
    if(!isset($_SESSION['login']) &&  $_SESSION['login'] != true && !isset($_SESSION['superuser']) && $_SESSION['superuser'] != true){

        header('location: /superuser');
        
    }
    else{
        $type = $_POST['type'];
        $password = $_POST['change-pass'];
        if($type == 'user'){
            $sql = "UPDATE `pass` SET `pass`= '$password'";
            $result = mysqli_query($conn, $sql);
            echo $sql ;
            if($result){
                header('location: /superuser.php');

            }
        }
        if($type == 'superuser'){
            $sql = "UPDATE `pass` SET `superuser_pass`= '$password'";
            $result = mysqli_query($conn, $sql);
            echo $sql ;
            if($result){
                header('location: /superuser.php');

            }
        }
    }
}
else{
    header('location: /');
}


?>