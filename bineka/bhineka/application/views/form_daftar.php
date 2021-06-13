<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">

</head>
<body> 
    <form action="<?php echo base_url()."index.php/welcome/aksi_daftar"?>" method="POST">
        
        <h2>Daftar Bhineka</h2>
        <label>User Name</label>
     	<input type="text" name="username" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
    

        <button type="submit">submit</button>   
    </form>
    
    <a href="<?php echo base_url()."index.php/welcome/"?>">Login</a>
</body>
</html>