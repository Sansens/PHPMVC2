<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
        Tambah Data Siswa
      </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/datasiswa/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari datasiswa.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar Siswa</h3>
      <ul class="list-group">
        <?php foreach ($data['siswa'] as $siswa) : ?>
          <li class="list-group-item">
            <?= $siswa['nama']; ?>
            <a href="<?= BASEURL; ?>/datasiswa/hapus/<?= $siswa['nis']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
            <a href="<?= BASEURL; ?>/datasiswa/ubah/<?= $siswa['nis']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $siswa['nis']; ?>">ubah</a>
            <a href="<?= BASEURL; ?>/datasiswa/detail/<?= $siswa['nis']; ?>" class="badge badge-primary float-right">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/datasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="number">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis" autocomplete="off" required placeholder="contoh : 1234">
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" placeholder="Nama Kamu">
          </div>

          <div class="form-group">
            <label for="nama">jenis kelamin</label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jns_kel" id="jns_kel" value="option1">
              <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jns_kel" id="jns_kel" value="option2">
              <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>
          </div>

          <div class="form-group">
            <label for="number">tinggi</label>
            <input type="number and text" class="form-control" id="tinggi" name="tinggi" placeholder=" contoh : 160cm">
          </div>

          <div class="form-group">
            <label for="nama">asal sekolah</label>
            <input type="nama" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="contoh : SMPN 1 DONGKO">
          </div>

          <div class="form-group">
            <label for="komli">Komli</label>
            <select class="form-control" id="komli" name="komli">
              <option value="Kuliner ">Kuliner</option>
              <option value="Rekayasa Perangkat Lunak"> Rekayasa Perangkat Lunak</option>
              <option value="Desain Permodelan dan Informasi Bangunan">Desain Permodelan dan Informasi Bangunan</option>
              <option value="Akuntansi">Akuntansi</option>
              <option value="Teknik Pengelasan">Teknik Pengelasan</option>
              <option value="Teknik Pendingin dan Tata Udara">Teknik Pendingin dan Tata Udara</option>
              <option value="Teknik Konstruksi dan Perumahan">Teknik Konstruksi dan Perumahan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="number">Nilai UN</label>
            <input type="number" class="form-control" id="nilai_un" name="nilai_un" placeholder="Contoh : 34.00">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>