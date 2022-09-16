<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Masuk/Daftar Beauty Care</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="image/logo_lunaraweb.png" alt="">
                <h2>Lunara Beauty Care</h2>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login">Masuk</li></a>
                <a href="register.php"><li class="module-register active">Masuk</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Selamat Datang di</h1><h2>Lunara Beauty Care</h2></div>
            
            <div class="user line-input">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Masukkan Email" name="email">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Username" name="username">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Kata Sandi" name="password">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Konfirmasi Kata Sandi" name="password2">
            </div>
            
            <?php if(!empty($error)): ?>
            <div class="message">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Daftar<label class="lnr lnr-chevron-right"></label></button>
               
    </form>
    </div>

    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>