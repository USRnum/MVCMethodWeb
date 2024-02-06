<div class="container mt-4">
    <div class="row">
      <div class="col-lg-5">
        <?php Flashnotif::notif(); ?>
      </div>
</div>
<div class="row mb-2">
          <div class="col-lg-2">
            <form action="<?= base_url;?>pejabat/cari" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control " placeholder="Cari nama Pejabat" 
                name="pencarian" id="cari" >
                <button class="btn btn-outline-primary" type="submit" id="tombol cari">Cari</button>
              </div>
            </form>
          </div>
</div>
<div class="container mt-6">  
        <div class="col-5 mt-3">
        <button type="button" data-bs-toggle="modal" data-bs-target="#forminputmhs" 
        class="btn btn-sm btn-primary tambahDataP">Tambah data Pejabat</button>
            <h4>Daftar Pejabat</h4>
                <ul class="list-group">
                <?php foreach($data['pjb'] as $pjb): ?>
                    <li class="list-group-item"><?=$pjb['namapejabat']; ?> 
                    <a href="<?= base_url;?>pejabat/detail/<?= $pjb['idpejabat']; ?>" class="btn btn-sm btn-primary float-end m-1">Detail</a>
                    <a href="<?= base_url;?>pejabat/hapus/<?= $pjb['idpejabat']; ?>" class="btn btn-sm btn-danger float-end m-1" onclick="return confirm('Yakin Data akan dihapus.?');" >Hapus</a>
                    <a href="<?= base_url;?>pejabat/ubah/<?= $pjb['idpejabat']; ?>" data-bs-toggle="modal" data-bs-target="#forminputmhs" 
                    class="btn btn-sm btn-success float-end m-1 tampilModalEditP" data-idpejabat="<?=$pjb['idpejabat']; ?>">Update Data</a>
                    </li>
                    
                <?php endforeach; ?>
                </ul>
            
        </div>
    </div>
</div>

<!--Model-->
<div class="modal fade" aria-Labelledby="judulModal" id="forminputmhs" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah data Pejabat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url;?>pejabat/tambah" method="post">
        <input type="hidden" name="idpejabat" id="idpejabat">
        <div class="input-group mb-3">
            <span class="input-group-text" >Id Pejabat</span>
            <input type="text" id="idpjb" name="idpejabat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" >Nama Pejabat</span>
            <input type="text" id="namapjb" name="namapejabat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" >Username</span>
            <input type="text" id="username" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" >Password</span>
            <input type="password" name="password" id="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <select name="level" id="level" aria-label="level" class="form-select mb-3">
            <option selected>Level Pejabat</option>
            <option value="1">Rektor</option>
            <option value="2">Wakil Rektor</option>
            <option value="3">Dekan</option>
            <option value="4">Kaprodi</option>
            <option value="5">Staff</option>
        </select>
        <div class="input-group mb-3">
            <span class="input-group-text" >Email</span>
            <input type="email" name="email" id="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>