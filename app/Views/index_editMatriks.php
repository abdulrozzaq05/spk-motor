<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Matriks</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Edit Data Matriks</h3>
                    </div>
                    <div class="card-body">
                        <?php foreach ($dataMtr as $row): ?>
                            <form action="<?= site_url('Dashboard/editmatriks/') . $row->id_alt; ?>" method="POST">
                                
                                <div class="form-group">
                                    <label for="alt_motor">Kode Alt</label>
                                    <input type="text" id="" class="form-control" name="alt_motor" placeholder="Kode Alt" value="<?= $row->alt_motor; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="kode_kriteria">Kode Kriteria</label>
                                    <input type="text" id="" class="form-control" name="kode_kriteria" placeholder="Kode Kriteria" value="<?= $row->kode_kriteria; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="value">Nilai Value</label>
                                    <input type="text" id="" class="form-control" name="value" placeholder="Nilai Value" value="<?= $row->value; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-outline-success">S A V E</button>
                                <a href="<?= site_url('Dashboard/viewmatriks') ?>" class="btn btn-outline-primary">LIHAT DATA</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>