<?= $this->extend('layout/mahasiswa/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-2 mb-5 d-flex justify-content-center">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Pendaftaran Wisudawan</h2>
            <form>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input name="nim" type="number" class="form-control" id="nim" placeholder="masukan nim">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap dan Gelar</label>
                    <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="masukan nama">
                </div>
                <div class="mb-3">
                    <label for="kodeprodi" class="form-label">Program Studi</label>
                    <select name="kodeprodi" class="form-select" aria-label="Default select example">
                        <option selected>--pilih prodi--</option>
                        <option value="1">Teknik Elektro</option>
                        <option value="2">Teknik Telekomunikasi</option>
                        <option value="3">Teknik Mesin</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kodeminat" class="form-label">Minat</label>
                    <select name="kodeminat" class="form-select" aria-label="Default select example">
                        <option selected>--pilih Peminatan--</option>
                        <option value="1">Teknik Elektro</option>
                        <option value="2">Teknik Telekomunikasi</option>
                        <option value="3">Teknik Mesin</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                    <input name="ttl" type="date" class="form-control" id="ttl" placeholder="masukan tempat dan tanggal lahir">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" placeholder="masukan alamat">
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input name="telepon" type="text" class="form-control" id="telepon" placeholder="masukan nomor telepon">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="masukan alamat email">
                </div>
                <div class="mb-3">
                    <label for="tanggallulus" class="form-label">Tanggal Lulus</label>
                    <input name="tanggallulus" type="date" class="form-control" id="tanggallulus">
                </div>
                <div class="mb-3">
                    <label for="ipk" class="form-label">IPK</label>
                    <input name="ipk" type="number" step="0.01" class="form-control" id="ipk" placeholder="masukan nilai IPK">
                </div>
                <div class="mb-3">
                    <label for="nilai_tesis" class="form-label">Nilai Tesis</label>
                    <input name="nilai_tesis" type="text" class="form-control" id="nilai_tesis" placeholder="A/B/C/D">
                </div>
                <div class="mb-3">
                    <label for="dosbim" class="form-label">Dosen Pembimbing</label>
                    <select name="dosbim" class="form-select" aria-label="Default select example">
                        <option selected>--dosbim--</option>
                        <option value="1">Hidayat S.Pd</option>
                        <option value="2">Doni Salmanan H.Rd</option>
                        <option value="3">Claira Demosquito Ph.D</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="lama_studi" class="form-label">Lama Studi</label>
                    <input name="lama_studi" type="number" class="form-control" id="lama_studi" placeholder="Total Semester Diambil(mis:4/5/6)">
                </div>
                <div class="mb-3">
                    <label for="file_foto" class="form-label">Foto Terbaru</label>
                    <input name="file_foto" type="file" class="form-control" id="file_foto">
                </div>
                <div class="mb-3 form-check">
                    <input name="persetujuan" type="checkbox" class="form-check-input name=" id="persetujuan">
                    <label class="form-check-label" for="persetujuan">Saya menyetujui dan sudah memastikan data yang saya masukan benar</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>