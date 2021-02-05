<div class="container mt-3">
    <div class="row">
      <div class="col-lg-6">
          <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tomboltambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari mahasiswa" name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>

            <?php foreach ($data['mhs'] as $mhs) : ?>
            <ul class="list-group">
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right mt-1" onclick="return confirm('yakin?');">hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-right  mt-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary float-right mt-1">detail</a>
                </li> 
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">    
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">  
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required="true">
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp" required="true">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" required="true">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Akuntansi">Akuntansi</option>
              <option value="Biologi">Biologi</option>
              <option value="Kedokteran">Kedokteran</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>