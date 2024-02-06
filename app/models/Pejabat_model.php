<?php 
class Pejabat_model{
    private $table = 'pejabat';
    private $db;

    public function __construct(){
        $this->db =new Database;
    }
    public function getPejabatall(){
        $this->db->query('SELECT * from ' . $this->table);
        return $this->db->resultSet();
    }
    public function getPejabatById($idpejabat){
        $this->db->query('SELECT * from pejabat WHERE idpejabat=:idpejabat ');
        $this->db->bind('idpejabat', $idpejabat);
        return $this->db->single();
    }
    public function tambahDataPejabat($data){
        $queryinsert = "INSERT into pejabat values(:idpejabat, :namapejabat, :username, :password, :level, :email)";
        $this->db->query($queryinsert);
        $this->db->bind('idpejabat', $data['idpejabat']);
        $this->db->bind('namapejabat', $data['namapejabat']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('email', $data['email']);
        

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataPejabat($idpejabat){
        $querydelete = "DELETE FROM pejabat WHERE idpejabat=:idpejabat";
        $this->db->query($querydelete);
        $this->db->bind('idpejabat', $idpejabat);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataPejabat($data){
        $queryupdate = "UPDATE pejabat SET namapejabat= :namapejabat, username = :username, 
        password= :password, level= :level, email= :email WHERE idpejabat= :idpejabat";
        $this->db->query($queryupdate);
        $this->db->bind('idpejabat', $data['idpejabat']);
        $this->db->bind('namapejabat', $data['namapejabat']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cariDataPejabat(){
        $keyword = $_POST['pencarian'];
        $querycari = "SELECT * FROM pejabat WHERE namapejabat LIKE :pencarian";
        $this->db->query($querycari);
        $this->db->bind('pencarian', "%$keyword%");
        return $this->db->resultSet();
    }
}
?>