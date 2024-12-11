<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Kriteria</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Edit Data Kriteria</h3>
                    </div>
                    <div class="card-body">
                        <?php foreach ($dataMtr as $row): ?>
                            <form action="<?= site_url('Dashboard/editkriteria/') . $row->kode_kriteria; ?>" method="POST">
                                <input type="hidden" id="kode_kriteria" name="kode_kriteria" value="<?= $row->kode_kriteria; ?>">
                                <div class="form-group">
                                    <label for="kode_kriteria">Kode Kriteria</label>
                                    <input type="text" id="kode_kriteria" class="form-control" name="kode_kriteria" value="<?= $row->kode_kriteria; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria</label>
                                    <input type="text" id="nama_kriteria" class="form-control" name="nama_kriteria" value="<?= $row->nama_kriteria; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="tingkat_kepentingan">Tingkat Kepentingan</label>
                                    <input type="text" id="tingkat_kepentingan" class="form-control" name="tingkat_kepentingan" value="<?= $row->tingkat_kepentingan; ?>" required>
                                </div>                                
                                <button type="submit" class="btn btn-outline-success">S A V E</button>
                                <a href="<?= site_url('Dashboard/viewkriteria') ?>" class="btn btn-outline-primary">LIHAT DATA</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>