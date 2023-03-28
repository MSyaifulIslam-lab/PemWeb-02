<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM kartu
";
$cards = $dbh->query($sql);
?>
    <a class="btn btn-success mb-2" href="create.php" role="button">Create Kartu</a>
    <table class="table text-center" width="100%" border="1" cellspacing="2" cellpadding="2">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Diskon</th>
                <th>Iuran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        foreach ($cards as $card) {
        ?>
                <tr>
                        <td><?= $nomor++ ?></td>
                        <td><?= $card['kode'] ?></td>
                        <td><?= $card['nama'] ?></td>
                        <td><?= $card['diskon'] ?></td>
                        <td><?= $card['iuran'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="view_produk.php?id=<?= $card['id'] ?>">View</a>
                        <a class="btn btn-primary" href="edit.php?id=<?= $card['id'] ?>">Edit</a>
                        <a class="btn btn-primary" href="delete.php?iddel=<?= $card['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $row['nama'] ?>?')) {return
                                false}">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>