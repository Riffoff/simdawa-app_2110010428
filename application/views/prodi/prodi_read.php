<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Program Studi</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('prodi/tambah') ?>" class="btn btn-success float-right">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Program Studi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($prodi as $p) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->nama_prodi ?></td>
                                        <td>
                                            <a href="<?= base_url('prodi/ubah/' . $p->id) ?>" class="btn btn-info btn-sm">
                                                <i class="fas fa-edit"></i> Ubah
                                            </a>
                                            <a href="<?= base_url('prodi/hapus/' . $p->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </a>
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