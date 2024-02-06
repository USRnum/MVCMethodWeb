<?php
class About extends Controller{
    public function index($nama ='Thoriq', $pekerjaan ='Mahasiswa'){
        $data['nama']=$nama;
        $data['pekerjaan']=$pekerjaan;
        $this->view('tamplates/header');
        $this->view('about/index', $data);
        $this->view('tamplates/footer');
    }
    public function page(){
        $this->view('tamplates/header');
        $this->view('about/page');
        $this->view('tamplates/footer');
    }
}
?>