<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Halaman Login</h2>
    <form action="<?php echo base_url()."index.php/welcome/aksi_login"?>" method="POST">
        Username : <input type="text" name="username"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit">  <input type="reset">  
    </form>
    <a href="<?php echo base_url()."index.php/welcome/daftar"?>">Daftar</a>
</body>
</html>