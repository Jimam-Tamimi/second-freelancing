<?php
require 'partials/_db-connect.php';
session_start();
if(!isset($_SESSION['login']) &&  $_SESSION['login'] != true && !isset($_SESSION['superuser']) && $_SESSION['superuser'] != true){
    header('location: /login');


    
}
else{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload']) && $_POST['upload'] == 'Upload') {
        $level = $_POST['level'];
        $sql = "INSERT INTO level_" . $level ." (`type`, `question`, `answer`) VALUES " . $_POST['question'];
    
        $sql2 = "DELETE FROM level_". $level ."";
        $result = mysqli_query($conn, $sql2);
        $result2 = mysqli_query($conn, $sql);
        if($result && $result2){
            $success = true;
        }
        
    }
    else{
        header('location: /');
    } 
}



?>