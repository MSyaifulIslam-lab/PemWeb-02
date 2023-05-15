<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);
?>

<?php
include_once 'templates/Top.php';
include_once 'templates/Sidebar.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Pesanan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pesanan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <a class="btn btn-success mb-2" href="form_pelanggan.php" role="button">Create Pelanggan</a>
            <table class="table text-center" width="100%" border="1" cellspacing="2" cellpadding="2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Qty</th>
                        <th>Tanggal</th>
                        <th>Total Harga</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Pemesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        $nomor = 1;
        foreach ($rs as $row) {
            ?>
                    <tr>
                        <td>
                            <?= $nomor ?>
                        </td>
                        <td>
                            <?= $row['nama_produk'] ?>
                        </td>
                        <td>
                            <?= $row['qty'] ?>
                        </td>
                        <td>
                            <?= $row['tanggal'] ?>
                        </td>
                        <td>
                            <?= $row['total_harga'] ?>
                        </td>
                        <td>
                            <?= $row['nama_pemesan'] ?>
                        </td>
                        <td>
                            <?= $row['alamat_pemesan'] ?>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="view_pelanggan.php?id=<?= $row['id'] ?>">View</a>
                            <a class="btn btn-primary" href="form_pelanggan.php?idedit=<?= $row['id'] ?>">Edit</a>
                            <a class="btn btn-primary" href="delete_pelanggan.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $row['nama_produk'] ?>?')) {return
                                false}">Delete</a>
                        </td>
                    </tr>
                    <?php
            $nomor++;
        }
        ?>
                </tbody>
            </table>
    </section>
</div>

</div>
</div>

<?php
include_once 'templates/footer.php'

    ?>