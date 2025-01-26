<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        Ubah Data Persyaratan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $persyaratan->id ?>">
                            <div class="form-group">
                                <label>Nama Persyaratan</label>
                                <input type="text" name="nama_persyaratan" value="<?= $persyaratan->nama_persyaratan ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" value="<?= $persyaratan->keterangan ?>" class="form-control" required>
                            </div>
                            <button type="submit" name="update" class="btn btn-info">Simpan</button>
                            <a href="<?= base_url('persyaratan') ?>" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>