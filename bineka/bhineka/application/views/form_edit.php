<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        foreach ($data as $dat){
    ?>

    <form action="<?php echo base_url()."index.php/hal_admin/update_data"?>" method="POST">
        No : <input type="text" name="no" readonly value="<?php echo $dat['kd_brg']; ?>"> <br>
        kode : <input type="text" name="kode" value="<?php echo $dat['kd_brg']; ?>"><br>
        nama : <input type="text" name="nama" value="<?php echo $dat['nm_brg']; ?>"><br>
        satuan : <input type="text" name="satuan" value="<?php echo $dat['satuan']; ?>"><br>
        harga : <input type="text" name="harga" value="<?php echo $dat['harga']; ?>"><br>
        harga beli : <input type="text" name="beli" value="<?php echo $dat['harga_beli']; ?>"><br>
        stok : <input type="text" name="stok" value="<?php echo $dat['stok']; ?>"><br>
        minimum pembelian : <input type="text" name="min" value="<?php echo $dat['stok_min']; ?>"><br>
        gambar : <input type="text" name="gambar" value="<?php echo $dat['gambar']; ?>"><br>
        <input type="submit">  <input type="reset">  
    </form>
    <?php } ?>
</body>
</html>