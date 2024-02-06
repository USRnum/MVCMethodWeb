<?php 
class Pejabat extends Controller{
    public function index(){
        $data['judul'] = 'Data Pejabat';
        $data['pjb']   = $this->model('Pejabat_model')->getPejabatall();
        $this->view('tamplates/header', $data);
        $this->view('pejabat/index', $data);
        $this->view('tamplates/footer');
    }
    public function detail($idpejabat){
        $data['judul'] = 'Detail Pejabat';
        $data['pjb']   = $this->model('Pejabat_model')->getPejabatById($idpejabat);
        $this->view('tamplates/header', $data);
        $this->view('pejabat/detail', $data);
        $this->view('tamplates/footer');
    }
    public function tambah(){
        if($this->model('Pejabat_model')->tambahDataPejabat($_POST)>0 ){

            Flashnotif::setFlash('Berhasil', 'Ditambah', 'alert alert-success');
            header('Location:'. base_url .'pejabat/index');
            exit;
        }else{
            Flashnotif::setFlash('Gagal', 'Ditambah', 'alert alert-danger');
            header('Location:'. base_url .'pejabat/index');
            exit;
        }
    }
    public function hapus($idpejabat){
        if($this->model('Pejabat_model')->hapusDataPejabat($idpejabat)>0){
            Flashnotif::setFlash('Berhasil', 'DiHapus', 'alert alert-success');
            header('Location:'. base_url .'pejabat/index');
            exit;
        }else{
            Flashnotif::setFlash('Gagal', 'DiHapus', 'alert alert-danger');
            header('Location:'. base_url .'pejabat/index');
            exit;
        }
    }
    public function EditPjb(){
        echo json_encode($this->model('Pejabat_model')->getPejabatById($_POST['idpejabat']));
        
    }
    public function ubah(){
        if($this->model('Pejabat_model')->ubahDataPejabat($_POST)>0){
            //
            Flashnotif::setFlash('Berhasil', 'Diubah', 'alert alert-success');
            header('Location:'. base_url .'pejabat/index');
            exit;
        }else{
            //
            Flashnotif::setFlash('Gagal', 'Diubah', 'alert alert-danger');
            header('Location:'. base_url .'pejabat/index');
            exit;
        }
    }
    public function cari(){
        $data['judul'] = 'Daftar Pejabat';
        $data['pjb'] = $this->model('Pejabat_model')->cariDataPejabat();
        $this->view('tamplates/header', $data);
        $this->view('pejabat/index', $data);
        $this->view('tamplates/footer');
    }
}
?>