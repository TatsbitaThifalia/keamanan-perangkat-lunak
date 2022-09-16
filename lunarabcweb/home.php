<?php session_start();

    if(isset($_SESSION['username'])){
        require 'frontend/home-view.php';
    }else{
        header ('location: login.php');
    }
        
?>