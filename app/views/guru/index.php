<style>
    .profile {
        width: 150px;
    }
    h3.title {
        padding: 12px;
    }
</style>
<div class="container">
    <div class="row">
        <h3 class="title">Data Guru RPL SMKN 2 Trenggalek</h3>
        <table class="table table-striped">
            <thead>
                <tr class="bg-warning">
                    <th scope="col">Komli</th>
                    <th scope="col">Tanggal Berdiri</th>
                    <th scope="col">Nama Kakomli</th>
                    <th scope="col">Jumlah siswa</th>
                    <th scope="col">Akreditasi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['komli'] as $komli) : ?>
                    <tr>
                        <td><?= $komli['komli']; ?></td>
                        <td><?= $komli['tgl_berdiri']; ?></td>
                        <td><?= $komli['nama_kakomli']; ?></td>
                        <td><?= $komli['jum_siswa']; ?></td>
                        <td><?= $komli['akreditasi']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>