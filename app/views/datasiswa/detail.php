<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['siswa']['nis']; ?></h6>
            <p class="card-text"><?= $data['siswa']['asal_sekolah']; ?></p>
            <p class="card-text"><?= $data['siswa']['komli']; ?></p>
            <a href="<?= BASEURL; ?>/datasiswa" class="card-link">Kembali</a>
        </div>
    </div>

</div>