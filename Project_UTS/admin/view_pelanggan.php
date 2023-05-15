<?php 
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td><?=$row['id']?></td>
                    </tr>
                    <tr>
                        <td>Nama Prosuk: </td>
                        <td><?=$row['nama_produk']?></td>
                    </tr>
                    <tr>
                        <td>Qty: </td>
                        <td><?=$row['qty']?></td>
                    </tr>
                    <tr>
                        <td>Tanggal: </td>
                        <td><?=$row['tanggal']?></td>
                    </tr>
                    <tr>
                        <td>Total Harga: </td>
                        <td><?=$row['total_harga']?></td>
                    </tr>
                    <tr>
                        <td>Nama Pemesan: </td>
                        <td><?=$row['nama_pemesan']?></td>
                    </tr>
                    <tr>
                        <td>Alamat Pemesan: </td>
                        <td><?=$row['alamat_pemesan']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6"></div>
    </div>
</div>