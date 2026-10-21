<?php

class mahasiswa {
    
    public $nim;
    public $nama;
    public $prodi;
    public $semester;
    
    public function __construct(
        $nim, 
        $nama,
        $prodi,
        $semester
    ) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    public function tampilkanData() {
        echo "NIM : ".$this->nim."<br>";
        echo "Nama : ".$this->nama."<br>";
        echo "Prodi : ".$this->prodi."<br>";
        echo "Semester : ".$this->semester."<br>";
    }
}

$mhs1 = new mahasiswa(
    "123456789",
    "FATIMATUZ ZAHRO'",
    "Sistem Informasi",
    4
);

$mhs1->tampilkanData();

?>