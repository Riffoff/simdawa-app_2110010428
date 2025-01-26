<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">Tambah Data Beasiswa</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Nama Beasiswa</label>
                                <input type="text" name="nama_beasiswa" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Beasiswa</label>
                                <select name="jenis_id" class="form-control" required>
                                    <option value="">Pilih Jenis Beasiswa</option>
                                    <?php foreach ($jenis as $j) { ?>
                                        <option value="<?= $j->id ?>"><?= $j->nama_jenis ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" name="create" class="btn btn-info">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="<?= base_url('beasiswa') ?>" class="btn btn-danger">
                                <i class="fas fa-times"></i> Batal
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>