<?php

// membuat class

class Buku{

// property
public $kode;
public $judul;
public $penulis;
public $tahun;

//method
public function tampilData(){
    echo "kode Buku : ". $this->kode."<br>";
    echo "judul : ". $this->judul."<br>";
    echo "penulis :". $this->penulis."<br>";
    echo "tahun :". $this->tahun."<br>";
    echo "<hr>";
}
  }

  //membuat object buku
$buku1 = new Buku();
$buku1->kode = "BK001";
$buku1->judul = "Pemrograman PHP";
$buku1->penulis = "Andi";
$buku1->tahun = 2022;

$buku1->tampilData();
