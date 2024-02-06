<div class="container mt-6">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['pjb']['namapejabat'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['pjb']['idpejabat'] ?></h6>
    <p class="card-text"><?= $data['pjb']['username'] ?></p>
    <p class="card-text"><?= $data['pjb']['email'] ?></p>
    <p class="card-text"><?= $data['pjb']['level'] ?></p>
    <a href="<?= base_url; ?>pejabat/index" class="card-link btn btn-sm btn-primary">Kembali</a>
  </div>
</div>
</div>