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
                    <h3>Input Data Check In</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <form action="p_tambah.php" method="POST">
                                <div class="form-group">
                                    <label for="">Nama Pengunjung</label>
                                    <select name="id_pengunjung" class="form-control">
                                        <?php
                                            $sql = mysqli_query($dbc,"SELECT id_pengunjung,nama FROM pengunjung");
                                            while($r = mysqli_fetch_assoc($sql)){
                                        ?>
                                        <option value="<?php echo $r['id_pengunjung'] ?>"><?php echo $r['id_pengunjung'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kamar</label>
                                    <select name="id_kamar" class="form-control">
                                        <?php
                                            $sql = mysqli_query($dbc,"SELECT id_kamar,jenis_kamar FROM kamar");
                                            while($r = mysqli_fetch_assoc($sql)){
                                        ?>
                                        <option value="<?php echo $r['id_kamar'] ?>"><?php echo $r['jenis_kamar'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Check In</label>
                                    <input type="date" name="tgl_ci" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Tambah</button>
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
