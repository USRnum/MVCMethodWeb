<?php 
class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = 'Data Mahasiswa';
        $data['mhs']   = $this->model('Mahasiswa_model')->getMahasiswaall();
        $this->view('tamplates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('tamplates/footer');
    }
    public function detail($nim){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs']   = $this->model('Mahasiswa_model')->getMahasiswaByNim($nim);
        $this->view('tamplates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('tamplates/footer');
    }
    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST)>0 ){

            Flashnotif::setFlash('Berhasil', 'Ditambah', 'alert alert-success');
            header('Location:'. base_url .'mahasiswa/index');
            exit;
        }else{
            Flashnotif::setFlash('Gagal', 'Ditambah', 'alert alert-danger');
            header('Location:'. base_url .'mahasiswa/index');
            exit;
        }
    }
    public function hapus($nim){
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($nim)>0){
            Flashnotif::setFlash('Berhasil', 'DiHapus', 'alert alert-success');
            header('Location:'. base_url .'mahasiswa/index');
            exit;
        }else{
            Flashnotif::setFlash('Gagal', 'DiHapus', 'alert alert-danger');
            header('Location:'. base_url .'mahasiswa/index');
            exit;
        }
    }
    public function EditMhs(){
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaByNim($_POST['nim']));
        
    }
    public function ubah(){
        if($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST)>0){
            //
            Flashnotif::setFlash('Berhasil', 'Diubah', 'alert alert-success');
            header('Location:'. base_url .'mahasiswa/index');
            exit;
        }else{
            //
            Flashnotif::setFlash('Gagal', 'Diubah', 'alert alert-danger');
            header('Location:'. base_url .'mahasiswa/index');
            exit;
        }
    }
    public function cari(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('tamplates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('tamplates/footer');
    }
}
?>