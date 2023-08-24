<?php
$pageTitle = "Tambah Mata Pelajaran";
include 'template/header.php';
include 'template/sidebar.php';
include '../connection.php';


?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2> <?php echo $pageTitle; ?></h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="mapel_tambah_process.php">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'template/footer.php';
?>