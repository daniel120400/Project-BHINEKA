<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Halo satu ini</h2>
    <h3>haloo </h3>
    <a href="<?php echo base_url()."index.php/hal_admin/baca_form"; ?>">Tambah Data</a> <br>
    <table border="1">
        <tr>
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Satuan</td>
            <td>Harga</td>
            <td>harga beli</td>
            <td>stok</td>
            <td>minimum beli</td>
            <td>gambar</td>
            <td>Aksi</td>
        </tr>
        <?php
            foreach ($data as $dat){
        ?>
            <tr>
            <td><?php echo $dat['kd_brg'] ?></td>
            <td><?php echo $dat['nm_brg'] ?></td>
            <td><?php echo $dat['satuan'] ?></td>
            <td><?php echo $dat['harga'] ?></td>
            <td><?php echo $dat['harga_beli'] ?></td>
            <td><?php echo $dat['stok'] ?></td>
            <td><?php echo $dat['stok_min'] ?></td>
            <td><?php echo $dat['gambar'] ?></td>
            <td>
                <a href="<?php echo base_url()."index.php/hal_admin/hapus_data/".$dat['kd_brg'];?>">HAPUS</a> |
                <a href="<?php echo base_url()."index.php/hal_admin/ambil_datawhere/".$dat['kd_brg'];?>">EDIT</a>
            </td>
            </tr>
        <?php } ?>
    </table>
    <a href="<?php echo base_url()."index.php/welcome/logout"; ?>">logout</a>
    <!-- <?php
        foreach ($data as $dat){
            echo "kode :".$dat['kd_brg']."<br>";
            echo "nama :".$dat['nm_brg']."<br>";
            echo "satuan :".$dat['satuan']."<br>";
            echo "harga :".$dat['harga']."<br>";
            echo "harga beli:".$dat['harga_beli']."<br>";
            echo "stok :".$dat['stok']."<br>";
            echo "minimum pembelian :".$dat['stok_min']."<br>";
            echo "gambar :".$dat['gambar']."<br>"."<br>";
        }
        echo "berhasil ";
    ?> -->
</body>
</html>