<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Mahasiswa</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Kode Prodi</th>
                        <th scope="col">Tempat dan Tanggal Lahir</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $value) ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td>
                            <img src="/<?= $value['foto_direktori']; ?>" alt="person_1" class="sampul">
                        </td>
                        <td><?= $value['nama_lengkap']; ?></td>
                        <td><?= $value['kode_prodi']; ?></td>
                        <td><?= $value['tempat_lahir']; ?>, <?= $value['tanggal_lahir']; ?></td>
                        <td><?= $value['telp']; ?></td>
                        <td><?= $value['email']; ?></td>
                        <td><?= $value['alamat']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>