<?php

class Buku {
    
    public $judul;
    public $penulis;

    public function __construct($judul,$penulis){

         $this->judul = $judul;
         $this->penulis = $penulis;
    }

    public function tampilkanData() {
        echo "judul: " .$this->judul. "<br>";
        echo "penulis: " .$this->penulis;
    }
}

$buku1 = new Buku(
    "Pemrograman PHP",
    "Ahmad"
);

?>