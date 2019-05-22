
<!doctype html>
<html lang="en">

<head>
    <?php include('../layout2/head.php'); ?>
</head>

<?php
?>

<body>

    <div class="wrapper">

        <?php include('../layout2/sidebar.php'); ?>

        <div class="main-panel">
            <?php
            include('../layout2/navbar.php');
            $id = $_GET['id'];
            $sql = mysqli_query($dbc,"SELECT * FROM transaksi INNER JOIN pengunjung ON pengunjung.id_pengunjung = transaksi.id_pengunjung INNER JOIN kamar ON kamar.id_kamar = transaksi.id_kamar WHERE id_transaksi = $id");
            $r = mysqli_fetch_assoc($sql);
            ?>
            <div class="content">
                <div class="container-fluid">
                    <h3>Edit Data Transaksi</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <form action="p_edit.php" method="POST">
                               <div class="from-group"><label for="">ID Transaksi</label><input type="text" name="id_transaksi" class="form-control" value="<?php echo $r['id_transaksi'] ?>" readonly></div>
                                <div class="form-group">
                                    <label for="">Nama Pengunjung</label>
                                    <select name="id_pengunjung" class="form-control">
                                        <?php
                                            $sql = mysqli_query($dbc,"SELECT id_pengunjung,nama FROM pengunjung");
                                            while($q = mysqli_fetch_assoc($sql)){
                                        ?>
                                        <option value="<?php echo $r['id_pengunjung'] ?>" <?php echo $r['id_pengunjung']==$q['id_pengunjung']?'selected':'' ?>><?php echo $r['nama'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kamar</label>
                                    <select name="id_kamar" class="form-control">
                                        <?php
                                            $sql = mysqli_query($dbc,"SELECT id_kamar,jenis_kamar FROM kamar");
                                            while($q = mysqli_fetch_assoc($sql)){
                                        ?>
                                        <option value="<?php echo $r['id_kamar'] ?>" <?php echo $r['id_kamar']==$q['id_kamar']?'selected':'' ?>><?php echo $r['jenis_kamar'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Check In</label>
                                    <input type="date" name="tgl_ci" class="form-control" value="<?php echo $r['tgl_ci'] ?>">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                    <a href="index.php"><button class="btn btn-secondary">Kembali</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
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
