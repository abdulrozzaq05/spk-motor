<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Bobot</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Edit Data Bobot</h3>
                    </div>
                    <div class="card-body">
                        <?php foreach ($dataMtr as $row): ?>
                            <form action="<?= site_url('Dashboard/editbobot/') . $row->id_bobot; ?>" method="POST">
                                <input type="hidden" id="id_bobot" name="id_bobot" value="<?= $row->id_bobot; ?>">
                                <div class="form-group">
                                    <label for="kode_kriteria">Kode Kriteria</label>
                                    <select id="kode_kriteria" class="form-control" name="kode_kriteria" required>
                                        <option value="" disabled selected>Pilih Kode Alternatif</option>
                                        <?php if (!empty($dataMtr)) : ?>
                                            <?php foreach ($dataMtr as $mtr) : ?>
                                                <option value="<?= $mtr->kode_kriteria; ?>" <?= ($mtr->kode_kriteria == $row->kode_kriteria) ? 'selected' : ''; ?>>
                                                    <?= $mtr->kode_kriteria; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <option value="" disabled>Tidak ada data</option>
                                        <?php endif; ?>
                                    </select>
                                </div>                                
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria</label>
                                    <input type="text" id="nama_kriteria" class="form-control" name="nama_kriteria" value="<?= $row->nama_kriteria; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="tingkat_kepentingan">Tingkat Kepentingan</label>
                                    <input type="text" id="tingkat_kepentingan" class="form-control" name="tingkat_kepentingan" value="<?= $row->tingkat_kepentingan; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_bobot">Nilai Bobot</label>
                                    <input type="text" id="nilai_bobot" class="form-control" name="nilai_bobot" value="<?= $row->nilai_bobot; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-outline-success">S A V E</button>
                                <a href="<?= site_url('Dashboard/viewbobot') ?>" class="btn btn-outline-primary">LIHAT DATA</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>