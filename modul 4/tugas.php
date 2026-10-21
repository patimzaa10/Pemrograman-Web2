<?php
class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $diskon;

    // Constructor
    public function __construct($kode, $nama, $harga, $stok, $diskon = 0) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $diskon;
    }

    // Method tampil data
    public function tampilkanData() {
        echo "Kode Produk : " . $this->kode . "<br>";
        echo "Nama Produk : " . $this->nama . "<br>";
        echo "Harga       : Rp" . number_format($this->harga,0,",",".") . "<br>";
        echo "Stok        : " . $this->stok . "<br>";
        echo "Diskon      : " . $this->diskon . "%<br>";
        echo "Harga Setelah Diskon : Rp" . number_format($this->hitungHargaDiskon(),0,",",".") . "<br>";
        echo "Nilai Stok  : Rp" . number_format($this->hitungNilaiStok(),0,",",".") . "<br>";
        echo "---------------------------<br>";
    }

    // Method hitung nilai stok
    public function hitungNilaiStok() {
        return $this->hitungHargaDiskon() * $this->stok;
    }

    // Method hitung harga setelah diskon
    public function hitungHargaDiskon() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // Method tambah stok
    public function tambahStok($jumlah) {
        $this->stok += $jumlah;
    }

    // Method kurangi stok
    public function kurangiStok($jumlah) {
        if ($jumlah <= $this->stok) {
            $this->stok -= $jumlah;
        } else {
            echo "Stok tidak mencukupi!<br>";
        }
    }
}

// Membuat object
$produk1 = new Produk("P001", "Laptop", 7000000, 10, 10);
$produk2 = new Produk("P002", "Mouse", 150000, 25, 5);

// Contoh perubahan stok
$produk1->kurangiStok(2);
$produk2->tambahStok(5);

// Menampilkan data
$produk1->tampilkanData();
$produk2->tampilkanData();
?>