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
                <h3>Data Pengunjung</h3>
                <table class="table">
                    <tr>
                        <th>ID Pengunjung</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telp</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $sql = mysqli_query($dbc,"SELECT * FROM pengunjung");
                    while($r = mysqli_fetch_assoc($sql)){
                    ?>
                    <tr>
                        <td><?php echo $r['id_pengunjung']; ?></td>
                        <td><?php echo $r['nama']; ?></td>
                        <td><?php echo $r['alamat']; ?></td>
                        <td><?php echo $r['jk']; ?></td>
                        <td><?php echo $r['no_telp']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $r['id_pengunjung'] ?>"><button class="btn btn-secondary">Edit</button></a>
                            <a href="hapus.php?id=<?php echo $r['id_pengunjung'] ?>"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <a href="tambah.php"><button class="btn btn-primary">Tambah</button></a>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
<?php include('../layout2/js.php'); ?>
</html>
