<div class="container mt-3">
<div class="row">
      <div class="col-lg-12">
          <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-3">
        <a class="btn btn-primary btn-sm" href="<?= BASEURL; ?>/buku/tambah" role="button">Tambah Data</a>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-8">
        <form action="<?= BASEURL; ?>/buku/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari buku" name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h3><?= $data['judul']; ?></h3><br>

            <div class="table-responsive">
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1;
                foreach ($data['buku'] as $buku): ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $buku['judul']; ?></td>
                        <td><?= $buku['pengarang']; ?></td>
                        <td><?= $buku['penerbit']; ?></td>
                        <td><?= $buku['tahun']; ?></td>
                        <td><?= $buku['deskripsi']; ?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="<?= BASEURL; ?>/buku/detail/<?= $buku['PK_Buku'] ?>" role="button">Detail</a>
                            <a class="btn btn-success btn-sm" href="<?= BASEURL; ?>/buku/ubah/<?= $buku['PK_Buku'] ?>" role="button">Edit</a>
                            <a class="btn btn-danger btn-sm" href="<?= BASEURL; ?>/buku/hapus/<?= $buku['PK_Buku'] ?>" role="button" onclick="return confirm('yakin?');">Delete</a>
                        </td>
                    </tr>
                <?php 
                $no++;
                endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>