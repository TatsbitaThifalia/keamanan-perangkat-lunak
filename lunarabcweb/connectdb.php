<?php
    
    try{
         $connectdb = new PDO('mysql:host=localhost;dbname=lunaraweb', 'root', '');
    }catch(PDOException $test_error){
        echo "Error: " . $test_error->getMessage();
    }


?>