<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url()."index.php/hal_admin/tambah_data"?>" method="POST">
        kode : <input type="text" name="kode"><br>
        nama : <input type="text" name="nama"><br>
        satuan : <input type="text" name="satuan"><br>
        harga : <input type="text" name="harga"><br>
        harga beli : <input type="text" name="beli"><br>
        stok : <input type="text" name="stok"><br>
        minimum pembelian : <input type="text" name="min"><br>
        gambar : <input type="text" name="gambar"><br>
        <input type="submit">  <input type="reset">  
    </form>
    
</body>
</html>