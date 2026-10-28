<?php
 
 class Mahasiswa {
     public $nim;
     public $nama;
     public $prodi;
     public $semester;

    
 }

 $mhs1 = new Mahasiswa();
    $mhs1->nim = "23001";
    $mhs1->nama = "Andi";
    $mhs1->prodi = "Sistem Informasi";
    $mhs1->semester = 1;

    echo $mhs1->nim . "<br>";
    echo $mhs1->nama . "<br>";   
    echo $mhs1->prodi . "<br>";
    echo $mhs1->semester . "<br>";

    ?>


