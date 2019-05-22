
<!doctype html>
<html lang="en">

<head>
    <?php include('../layout2/head.php'); ?>
</head>

<body>

    <div class="wrapper">

        <?php include('../layout2/sidebar.php'); ?>

        <div class="main-panel">
            <?php
            include('../layout2/navbar.php');
            $id = $_GET['id'];
            $sql = mysqli_query($dbc,"SELECT * FROM pengunjung WHERE id_pengunjung = $id");
            $r = mysqli_fetch_assoc($sql);
            ?>
            <div class="content">
                <div class="container-fluid">
                    <h3>Edit Data Pengunjung</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <form action="p_edit.php" method="POST">
                                <div class="form-group">
                                    <label for="">ID Pengunjung</label>
                                    <input type="text" name="id_pengunjung" class="form-control" value="<?php echo $r['id_pengunjung'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Pengunjung</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $r['nama'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="<?php echo $r['alamat'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jk" id="" class="form-control">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Telepon</label>
                                    <input type="text" name="no_telp" class="form-control" value="<?php echo $r['no_telp'] ?>">
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
