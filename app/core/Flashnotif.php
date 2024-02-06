<?php 
class Flashnotif{
    public static function setFlash($pesan, $aksi, $tipe){
        $_SESSION['notif']=[
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }
    public static function notif(){
        if(isset($_SESSION['notif'])){
            echo'<div class="alert alert-' .$_SESSION['notif']['tipe']. ' alert-dismissible fade show" role="alert">Data Mahasiswa
            <strong>' .$_SESSION['notif']['pesan']. '</strong>
                    ' .$_SESSION['notif']['aksi']. '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            unset($_SESSION['notif']);
        }
    }
}
?>