<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash();?>
      </div>
    </div>


    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData tampilModalTambah" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
        </button>
        <br><br>
        <h3>Daftar Mahasiswa</h3>
        
        <ul class="list-group">
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="list-group-item text-capitalize">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">Hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-id="<?= $mhs['id']; ?>" data-target="#formModal">Ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-primary float-right ml-1">Detail</a>
                </li>
            <?php endforeach; ?>
        </ul>
        
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="TKJ">TKJ</option>
              <option value="TGB">TGB</option>
              <option value="TOI">TOI</option>
              <option value="TP">TP</option>
              <option value="TO">TO</option>
              <option value="KA">KA</option>
            </select>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="formModalLabel">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>