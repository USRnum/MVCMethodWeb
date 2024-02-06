<div class="container mt-6">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['mhs']['nama'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim'] ?></h6>
    <p class="card-text"><?= $data['mhs']['alamat'] ?></p>
    <p class="card-text"><?= $data['mhs']['prodi'] ?></p>
    <a href="<?= base_url; ?>mahasiswa/index" class="card-link btn btn-sm btn-primary">Kembali</a>
  </div>
</div>
</div>