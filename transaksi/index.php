<!doctype html>
<html lang="en">

<head>
    <?php include('../layout2/head.php'); ?>
</head>

<body>

    <div class="wrapper">

        <?php include('../layout2/sidebar.php'); ?>

        <div class="main-panel">
            <?php include('../layout2/navbar.php'); ?>


            <div class="content">
                <div class="container-fluid">
                    <h3>Data Transaksi</h3>
                    <table class="table">
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Jenis Kamar</th>
                            <th>Nama Pengunjung</th>
                            <th>Tanggal Check In</th>
                            <th>Tanggal Check Out</th>
                            <th>Total Bayar</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
            $sql = mysqli_query($dbc,"SELECT * FROM transaksi INNER JOIN pengunjung ON transaksi.id_pengunjung = pengunjung.id_pengunjung INNER JOIN kamar ON transaksi.id_kamar = kamar.id_kamar ORDER BY tgl_co ASC");
            while($r = mysqli_fetch_assoc($sql)){
            ?>
                        <tr>
                            <td><?php echo $r['id_transaksi']; ?></td>
                            <td><?php echo $r['jenis_kamar']; ?></td>
                            <td><?php echo $r['nama']; ?></td>
                            <td><?php echo $r['tgl_ci']; ?></td>
                            <td><?php echo $r['tgl_co']?$r['tgl_co']:'<b>Belum Checkout</b>' ; ?></td>
                            <td><?php echo $r['bayar']?'Rp. '.$r['bayar']:'<b>Belum Checkout</b>' ; ?></td>
                            <td>
                                <a href="checkout.php?id=<?php echo $r['id_transaksi'] ?>"><button class="btn btn-info">Checkout</button></a>
                                <a href="edit.php?id=<?php echo $r['id_transaksi'] ?>"><button class="btn btn-warning">Edit</button></a>
                                <a href="hapus.php?id=<?php echo $r['id_transaksi'] ?>"><button class="btn btn-danger">Hapus</button></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                    <a href="tambah.php"><button class="btn btn-primary">Check In</button></a>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy; <script>
                            document.write(new Date().getFullYear())

                        </script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>

        </div>
    </div>


</body>
<?php include('../layout2/js.php'); ?>

</html>
