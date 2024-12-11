<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Motor</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Edit Data Motor</h3>
                    </div>
                    <div class="card-body">
                        <?php foreach ($dataMtr as $row): ?>
                            <form action="<?= site_url('Dashboard/editmtr/') . $row->alt_motor; ?>" method="POST">
                                <input type="hidden" id="alt_motor" name="alt_motor" value="<?= $row->alt_motor; ?>">
                                <div class="form-group">
                                    <label for="alt_motor">Kode Alt</label>
                                    <input type="text" id="alt_motor" class="form-control" name="alt_motor" value="<?= $row->alt_motor; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_motor">Nama Motor</label>
                                    <input type="text" id="nama_motor" class="form-control" name="nama_motor" value="<?= $row->nama_motor; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="pabrikan">Nama Pabrik</label>
                                    <input type="text" id="pabrikan" class="form-control" name="pabrikan" value="<?= $row->pabrikan; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun Launching</label>
                                    <input type="text" id="tahun" class="form-control" name="tahun" value="<?= $row->tahun; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-outline-success">S A V E</button>
                                <a href="<?= site_url('Dashboard/viewmtr') ?>" class="btn btn-outline-primary">LIHAT DATA</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>