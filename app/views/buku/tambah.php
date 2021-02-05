<div class="container mt-5">
<h3><?= $data['judul']; ?></h3>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= BASEURL; ?>/buku/tambahBuku" method="post">
                <input type="hidden" name="id" id="id">  
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required="true">
                </div>
                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" required="true">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" required="true">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" required="true">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" required="true">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>