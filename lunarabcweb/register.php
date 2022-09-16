<?php session_start();

    if(isset($_SESSION['username'])) {
        header('location: index.php');
    }

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        
        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);
        
        $error = '';
        
        if (empty($email) or empty($username) or empty($password) or empty($password2)){
            
            $error .= '<i>Isi semua kolom!</i>';
        }else{
            try{
                $connectdb = new PDO('mysql:host=localhost;dbname=lunaraweb', 'root', '');
            }catch(PDOException $test_error){
                echo "Error: " . $test_error->getMessage();
            }
            
            $statement = $connectdb->prepare('SELECT * FROM login WHERE username = :username LIMIT 1');
            $statement->execute(array(':username' => $username));
            $result = $statement->fetch();
            
                        
            if ($result != false){
                $error .= '<i>Akun berhasil dibuat.</i>';
            }
            
            if ($password != $password2){
                $error .= '<i> Sandi tidak cocok.</i>';
            }
            
            
        }
        
        if ($error == ''){
            $statement = $connectdb->prepare('INSERT INTO login (id, email, username, password) VALUES (null, :email, :username, :password)');
            $statement->execute(array(
                
                ':email' => $email,
                ':username' => $username,
                ':password' => $password
                
            ));
            
            $error .= '<i style="color: green;">Akun berhasil dibuat.</i>';
        }
    }


    require 'frontend/register-view.php';

?>