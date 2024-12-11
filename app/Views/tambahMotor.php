<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Motor</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Tambah Data Motor</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo site_url('Dashboard/simpandatamotor') ?>">
                            <div class="form-group">
                                <label for="alt_motor">Kode Alt</label>
                                <input type="text" id="" class="form-control" name="alt_motor" placeholder="Kode Alternatif" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_motor">Nama Motor</label>
                                <input type="text" id="" class="form-control" name="nama_motor" placeholder="Nama Motor" required>
                            </div>
                            <div class="form-group">
                                <label for="pabrikan">Nama Pabrik</label>
                                <input type="text" id="" class="form-control" name="pabrikan" placeholder="Nama Pabrik" required>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun Launching</label>
                                <input type="text" id="" class="form-control" name="tahun" placeholder="Tahun Launching">
                            </div>                            
                            <button type="submit" class="btn btn-outline-success">S A V E</button>
                            <a href="<?= site_url('Dashboard/viewmtr') ?>" class="btn btn-outline-primary">LIHAT DATA</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>