<?php

class Mahasiswa {
    private $nama;
    private $nilai;

    public function setNama($nama){
      $this->nama = $nama;

    }

    public function setNilai($nilai){
         
        if ($nilai >= 0 && $nilai <= 100){

            $this->nilai = $nilai;

        } else {

            echo "Nilai Harus Berada Antara 0 Sampai 100";
        }
    }

    public function getNama(){
        return $this->nama;

    }

    public function getNilai(){
        return $this->nilai;

    }
}

$mhs1 = new Mahasiswa();
$mhs1->setNama("Andi");
$mhs1->setNilai(85);
echo "Nama : ".$mhs1->getNama(). "<br>";
echo "Nilai : ".$mhs1->getNilai();

?>