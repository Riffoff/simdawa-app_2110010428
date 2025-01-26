<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Persyaratan
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Nama Persyaratan</label>
                                <input type="text" name="nama_persyaratan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" required>
                            </div>
                            <button type="submit" name="create" class="btn btn-info">Simpan</button>
                            <a href="<?= base_url('persyaratan') ?>" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>