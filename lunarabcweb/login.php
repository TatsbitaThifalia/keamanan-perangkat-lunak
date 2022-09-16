<?php session_start();

    if(isset($_SESSION['username'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = hash('sha512', $password);
        
        try{
            $connectdb = new PDO('mysql:host=localhost;dbname=lunaraweb', 'root', '');
            }catch(PDOException $test_error){
                echo "Error: " . $test_error->getMessage();
            }
        
        $statement = $connectdb->prepare('
        SELECT * FROM login WHERE username = :username AND password = :password'
        );
        
        $statement->execute(array(
            ':username' => $username,
            ':password' => $password
        ));
            
        $result = $statement->fetch();
        
        if ($result !== false){
            $_SESSION['username'] = $username;
            header('location: home.php');
        }else{
            $error .= '<i style="color: red;">Nama pengguna ini tidak ada.</i>';
        }
    }
    
require 'frontend/login-view.php';


?>