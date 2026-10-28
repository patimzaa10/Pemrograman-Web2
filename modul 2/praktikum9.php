<?php
class Mahasiswa {
    // Property
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    //method untuk menentukan grade 
    public function tentukanGrade(){
        if ($this->nilai >= 80){
            return "A";
        } else if ($this->nilai >= 70){
            return "B";
        }else if ($this->nilai >= 60){
            return "C";
        }else if ($this->nilai >= 50){
            return "D";
        }else{
            return "E";
        }
    }

    //method untuk menampilkan data
    public function tampilkanData(){
    echo "NIM : ". $this->nim . "<br>";
    echo "Nama : ". $this->nama . "<br>";
    echo "Prodi : ". $this->prodi . "<br>";
    echo "Nilai : ". $this->nilai . "<br>";
    echo "Grade : ". $this->tentukanGrade() . "<br>";
    echo "<hr>";

    }
}
    //object mahasiswa 1
    $mhs1 = new mahasiswa();
    $mhs1 -> nim = "23001";
    $mhs1 -> nama = "Andi";
    $mhs1 -> prodi = "Sistem Informasi";
    $mhs1 -> nilai = 85;

    //object mahasiswa 2
    $mhs2 = new mahasiswa();
    $mhs2 -> nim = "23002";
    $mhs2 -> nama = "Aldo";
    $mhs2 -> prodi = "Sistem Informasi";
    $mhs2 -> nilai = 90;

    //menampilkan data 
    $mhs1->tampilkanData();
    $mhs2->tampilkanData();