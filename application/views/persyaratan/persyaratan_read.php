<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Persyaratan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('persyaratan/tambah') ?>" class="btn btn-success float-right">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Persyaratan</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($persyaratan as $p) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->nama_persyaratan ?></td>
                                        <td><?= $p->keterangan ?></td>
                                        <td>
                                            <a href="<?= base_url('persyaratan/ubah/' . $p->id) ?>" class="btn btn-info">Ubah</a>
                                            <a href="<?= base_url('persyaratan/hapus/' . $p->id) ?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>