<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Kriteria</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Tambah Data Kriteria</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo site_url('Dashboard/simpandatakriteria') ?>">                            
                            <div class="form-group">
                                <label for="kode_kriteria">Kode Kriteria</label>
                                <input type="text" id="" class="form-control" name="kode_kriteria" placeholder="Kode Kriteria" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_kriteria">Nama Kriteria</label>
                                <input type="text" id="" class="form-control" name="nama_kriteria" placeholder="Nama Kriteria" required>
                            </div>
                            <div class="form-group">
                                <label for="tingkat_kepentingan">Tingkat Kepentingan</label>
                                <input type="text" id="" class="form-control" name="tingkat_kepentingan" placeholder="Tingkat Kepentingan" required>
                            </div>                            
                            <button type="submit" class="btn btn-outline-success">S A V E</button>
                            <a href="<?= site_url('Dashboard/viewkriteria') ?>" class="btn btn-outline-primary">LIHAT DATA</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>