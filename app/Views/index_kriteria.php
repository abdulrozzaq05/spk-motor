<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Data Kriteria</h3>
                    </div>
                    <div class="card-body">
                        <div class="box" style="width : 100%">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>Tingkat Kepentingan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($dataMtr as $row): $no++; ?>
                                            <tr>
                                                <th> <?= $no; ?></th>
                                                <td><?= $row->kode_kriteria; ?></td>
                                                <td><?= $row->nama_kriteria; ?></td>
                                                <td><?= $row->tingkat_kepentingan; ?></td>
                                                <td>
                                                    <a href="<?= site_url('Dashboard/formEditKriteria/') . $row->kode_kriteria; ?>" class="btn btn-outline-primary">Edit</a> ||
                                                    <a href="<?= site_url('Dashboard/deletekriteria/') . $row->kode_kriteria; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </div>
</body>