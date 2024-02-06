<div class="container mt-4">
    <div class="row">
      <div class="col-lg-5">
        <?php Flashnotif::notif(); ?>
      </div>
</div>
<div class="row mb-2">
          <div class="col-lg-2">
            <form action="<?= base_url;?>mahasiswa/cari" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control " placeholder="Cari nama Mahasiswa" 
                name="pencarian" id="cari" >
                <button class="btn btn-outline-primary" type="submit" id="tombol cari">Cari</button>
              </div>
            </form>
          </div>
</div>
<div class="container mt-6">  
        <div class="col-5 mt-3">
        <button type="button" data-bs-toggle="modal" data-bs-target="#forminputmhs" 
        class="btn btn-sm btn-primary tambahData">Tambah data Mahasiswa</button>
            <h4>Daftar Mahasiswa</h4>
                <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs): ?>
                    <li class="list-group-item"><?=$mhs['nama']; ?> 
                    <a href="<?= base_url;?>mahasiswa/detail/<?= $mhs['nim']; ?>" class="btn btn-sm btn-primary float-end m-1">Detail</a>
                    <a href="<?= base_url;?>mahasiswa/hapus/<?= $mhs['nim']; ?>" class="btn btn-sm btn-danger float-end m-1" onclick="return confirm('Yakin Data akan dihapus.?');" >Hapus</a>
                    <a href="<?= base_url;?>mahasiswa/ubah/<?= $mhs['nim']; ?>" data-bs-toggle="modal" data-bs-target="#forminputmhs" 
                    class="btn btn-sm btn-success float-end m-1 tampilModalEdit" data-nim="<?=$mhs['nim']; ?>">Update Data</a>
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
        <h5 class="modal-title" id="judulModal">Tambah data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url;?>mahasiswa/tambah" method="post">
        <input type="hidden" name="nim" id="nim">
        <div class="input-group mb-3">
            <span class="input-group-text" >Nim</span>
            <input type="text" id="nimmhs" name="nim" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" >Nama</span>
            <input type="text" id="namamhs" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" >Tempat Lahir</span>
            <input type="text" id="tlahir" name="tempatlahir" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <select name="prodi" id="prodi" aria-label="prodi" class="form-select">
            <option selected>Program Studi</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>