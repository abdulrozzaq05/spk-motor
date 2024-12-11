<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Siswa</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Masukkan Data Siswa</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo site_url('Dashboard/simpandatasiswa') ?>">
                            <div class="form-group">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" id="" class="form-control" name="nama_siswa" placeholder="Nama Siswa Baru" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Siswa</label>
                                <input type="text" id="" class="form-control" name="alamat" placeholder="Alamat Siswa" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="gender" id="" required>
                                    <option selected disabled class="text-center">Gender</option>
                                    <?php
                                    foreach ($genderOptions as $gender) {
                                        echo "<option value='" . $gender->idgen . "'>" . $gender->gender . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-outline-success">S A V E</button>
                            <a href="<?= site_url('Dashboard/viewsiswa') ?>" class="btn btn-outline-primary">LIHAT DATA</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>