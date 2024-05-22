<form action="<?= base_url('mahasiswa/tambah_aksi') ?>" method="POST">
  <div class="form-group">
    <label for="nama_mahasiswa">Nama Mahasiswa</label>
    <input type="text" name="nama_mahasiswa" class="form-control">
    <?= form_error('nama_mahasiswa', '<div class="text-small text-danger">', '</div>'); ?>
  </div>
  <div class="form-group">
    <label for="npm_mahasiswa">NPM Mahasiswa</label>
    <input type="text" name="npm_mahasiswa" class="form-control">
    <?= form_error('npm_mahasiswa', '<div class="text-small text-danger">', '</div>'); ?>
  </div>
  <div class="form-group">
    <label for="alamat_mahasiswa">Alamat Mahasiswa</label>
    <textarea name="alamat_mahasiswa" class="form-control"></textarea>
    <?= form_error('alamat_mahasiswa', '<div class="text-small text-danger">', '</div>'); ?>
  </div>
  <div class="form-group">
    <label for="nomor_telepon">Nomor Telepon</label>
    <input type="text" name="nomor_telepon" class="form-control">
    <?= form_error('nomor_telepon', '<div class="text-small text-danger">', '</div>'); ?>
  </div>
  <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save mr-2"></i>Simpan</button>
  <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash mr-2"></i>Reset</button>
</form>
