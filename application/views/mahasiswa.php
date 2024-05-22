<?= $this->session->flashdata('message'); ?>
<div class="card">
  <div class="card-header">
    <a href="<?= base_url("mahasiswa/tambah") ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus mr-2"></i>Tambah
      Mahasiswa</a>
  </div>
  <!-- /.card-header -->
  <di class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead class="text-center">
        <tr>
          <th>No.</th>
          <th>Nama Mahasiswa</th>
          <th>NPM </th>
          <th>Alamat Mahasiswa</th>
          <th>Nomor Telepon</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php $no = 1; 
			foreach($mahasiswa as $mhs) : ?>
      <tbody>
        <tr class="text-center">
          <td><?= $no++; ?></td>
          <td><?= $mhs->nama_mahasiswa ?>
          </td>
          <td><?= $mhs->npm_mahasiswa ?></td>
          <td><?= $mhs->alamat_mahasiswa ?></td>
          <td><?= $mhs->nomor_telepon ?></td>
          <td>
            <a href="<?= base_url('mahasiswa/edit/' . $mhs->id_mahasiswa) ?>" class="btn btn-warning btn-sm"><i
                class="fas fa-edit"></i></a>
            <a href="<?= base_url('mahasiswa/hapus/'.$mhs->id_mahasiswa) ?>"
              onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm"><i
                class="fas fa-trash"></i></a>
          </td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
  </di v>
  <!--
 /.card-body -->
</div>