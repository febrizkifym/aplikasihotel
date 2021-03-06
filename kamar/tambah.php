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
                    <h3>Input Data Kamar</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <form action="p_tambah.php" method="POST">
                                <div class="form-group">
                                    <label for="">Jenis Kamar</label>
                                    <input type="text" name="jenis_kamar" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Harga Kamar</label>
                                    <input type="text" name="harga" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Tambah</button>
                                    <a href="index.php"><button class="btn btn-secondary" type="button">Kembali</button></a>
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
