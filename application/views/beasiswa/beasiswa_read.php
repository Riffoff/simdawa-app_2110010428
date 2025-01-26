<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header">
                    <h2>Data Beasiswa</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('beasiswa/tambah') ?>" class="btn btn-success float-right">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Beasiswa</th>
                                    <th>Jenis Beasiswa</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($beasiswa as $b) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $b->nama_beasiswa ?></td>
                                        <td><?= $b->nama_jenis ?></td>
                                        <td><?= $b->tanggal_mulai ?></td>
                                        <td><?= $b->tanggal_selesai ?></td>
                                        <td>
                                            <a href="<?= base_url('beasiswa/ubah/' . $b->id) ?>" class="btn btn-info btn-sm">
                                                <i class="fas fa-edit"></i> Ubah
                                            </a>
                                            <a href="<?= base_url('beasiswa/hapus/' . $b->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
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