<?php 
class produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    public function __construct(
        $kode,
        $nama,
        $harga,
        $stok
    ){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tampilkanData(){

        echo "<h3>Data Produk</h3>";

        echo "Kode : " .$this->kode . "<br>";
        echo "Nama : "  .$this->nama . "<br>";
        echo "Harga : " .$this->harga . "<br>";
        echo "Stok : " .$this->stok . "<br>";
    }

}

$produk1 = new produk(
    "P001",
    "Laptop",
    7000000,
    10
);

$produk2 = new Produk(
    "P002",
    "Mouse",
    150.000,
    20
);

$produk1->tampilkanData();
echo "<hr>";
$produk2->tampilkanData();
?>