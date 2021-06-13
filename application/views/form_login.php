<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Bhineka</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
</head>

<body>
    <form action="<?php echo base_url()."index.php/welcome/aksi_login"?>" method="POST">
        <h2>Login Bhineka</h2>

        <label>User Name</label>
     	<input type="text" name="username" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
        
        <button type="submit">Login</button>  
    </form>

    <a href="<?php echo base_url()."index.php/welcome/daftar"?>">Daftar</a>
</body>
</html>