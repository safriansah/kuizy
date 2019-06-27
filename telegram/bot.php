<?php
class bot{
    var $chatId;
    var $conn;

    public function __construct($chatId,$conn){  
        $this->chatId = $chatId;
        $this->conn = $conn; 
    }
    
    public function setuser($user){
        $sql="INSERT INTO `bot_user`(`chatId`, `nomor`,username) VALUES ('$this->chatId','0','$user')";
        return $this->conn->query($sql);
    }
    
    public function getnomor(){
        $query = mysqli_query($this->conn,"select nomor from bot_user where chatId='".$this->chatId."'");
        $cari = mysqli_fetch_row($query);
        return $cari['0'];
    }
    public function updatenomor($nomor){
        $sql="UPDATE `bot_user` SET `nomor`='$nomor' WHERE `chatId`='$this->chatId'";
        return $this->conn->query($sql);
    }
    public function setwaktu(){
        $sql="UPDATE `bot_user` SET `waktu`=now() WHERE `chatId`='$this->chatId'";
        return $this->conn->query($sql);
    }
    public function getwaktu(){
        $query = mysqli_query($this->conn,"select (now()-waktu) from bot_user where chatId='".$this->chatId."'");
        $cari = mysqli_fetch_row($query);
        return $cari['0'];
    }

    function setmain($z,$kat){
        $sql = "select kd_soal from soal where kategori='$kat' order by rand() limit $z";
        $query = $this->conn->query($sql);
        $a=1;
        while ($data = $query->fetch_assoc()) :
            $sql="INSERT INTO `bot_main`(`chatId`, `nomor`, `kd_soal`) VALUES ('$this->chatId','$a','".$data['kd_soal']."')";
            $this->conn->query($sql);
            $a++;
        endwhile;
    }
    function deletemain(){
        $sql="DELETE FROM `bot_main` WHERE `chatId`='$this->chatId'";
        $this->conn->query($sql);
    }
    function jawab($jawab){
        $kode=$this->getkodesoal();
        $sql="UPDATE `bot_main` SET `jawaban`='$jawab' WHERE `chatId`='$this->chatId' and kd_soal='".$kode."'";
        $this->conn->query($sql);
    }
    function getkodesoal(){
        $nomor=$this->getnomor();
        $query = mysqli_query($this->conn,"select kd_soal from bot_main where chatId='".$this->chatId."' and nomor='".$nomor."'");
        $cari = mysqli_fetch_row($query);
        return $cari['0'];
    }
    function getsoal(){
        $nomor=$this->getnomor();
        $kode=$this->getkodesoal();
        $query = mysqli_query($this->conn,"select soal,pil_a,pil_b,pil_c,pil_d,gambar from soal where kd_soal='".$kode."'");
        $cari = mysqli_fetch_row($query);
        $hasil="$nomor. ";
        for($a=0;$a<=4;$a++){
            $hasil.=$cari[$a];
            $hasil.="\n";
            if($a=="0") $j="/a ";
            else if($a=="1") $j="/b ";
            else if($a=="2") $j="/c ";
            else if($a=="3") $j="/d ";
            else $j="";          
            $hasil.=$j;
        }
        if($cari[5])$hasil.=$cari[5];
        return $hasil;
    }
    function hitung($z,$user,$waktu){
        $query = mysqli_query($this->conn,"SELECT count(*) FROM bot_main INNER JOIN soal ON bot_main.jawaban=soal.jawaban where bot_main.kd_soal=soal.kd_soal and bot_main.chatId='$this->chatId'");
        $cari = mysqli_fetch_row($query);
        $benar=$cari['0'];
        $salah=$z-$benar;
        $skor=round($benar/$z*100, 0);
        $this->simpannilai($user,$skor,$waktu);
        return "Benar: $benar \nSalah: $salah\nSKOR: $skor";
    }
    function simpannilai($username,$nilai,$waktu){
        $kat=$this->getkategri();
        $sql="INSERT INTO `bot_nilai`(`username`, `id_kategori`, `nilai`, `tanggal`,waktu) VALUES ('$username','$kat','$nilai',NOW(),'$waktu')";
        $this->conn->query($sql);
    }
    function getkategri(){
        $this->updatenomor('1');
        $kode=$this->getkodesoal();
        $query = mysqli_query($this->conn,"SELECT kategori FROM soal where kd_soal='$kode'");
        $cari = mysqli_fetch_row($query);
        return $cari['0'];
    }
    function getnilai($kat){
        $sql = "SELECT username,ROUND(nilai,0) as nilai,waktu FROM bot_nilai WHERE id_kategori='$kat' ORDER BY nilai DESC, waktu DESC, tanggal desc limit 3";
        $query = $this->conn->query($sql);
        $a=0;
        while ($data = $query->fetch_assoc()) :
            $a++;
            $hasil.=$a.". ".$data['username']."(".$data['nilai'].")(".$data['waktu'].")\n";
        endwhile;
        if($a==0) $hasil="null\n";
        return $hasil;
    }
    function getidnilai($username){
        $query = mysqli_query($this->conn,"select id from bot_nilai where username='".$username."' order by tanggal desc limit 1");
        $cari = mysqli_fetch_row($query);
        return $cari['0'];
    }
}
?>
