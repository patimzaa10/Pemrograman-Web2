
<?php

class Pengguna {
    protected $nama;
    protected $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Pengguna Sistem Informasi Akademik<br>";
    }
}

class Mahasiswa extends Pengguna {
    private $nim;
    private $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "NIM: " . $this->nim . "<br>";
        echo "Program Studi: " . $this->prodi . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Mahasiswa<br>";
    }
}

class Dosen extends Pengguna {
    private $nidn;
    private $bidangKeahlian;

    public function __construct($nama, $email, $nidn, $bidangKeahlian) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "NIDN: " . $this->nidn . "<br>";
        echo "Bidang Keahlian: " . $this->bidangKeahlian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Dosen<br>";
    }
}

class Administrasi extends Pengguna {
    private $idPegawai;
    private $bagian;

    public function __construct($nama, $email, $idPegawai, $bagian) {
        parent::__construct($nama, $email);
        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "ID Pegawai: " . $this->idPegawai . "<br>";
        echo "Bagian Kerja: " . $this->bagian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Tenaga Administrasi<br>";
    }
}

// Membuat object mahasiswa
$mhs1 = new Mahasiswa(
    "Andi",
    "andi@email.com",
    "2301061",
    "Sistem Informasi"
);

// Membuat object dosen
$dosen1 = new Dosen(
    "Budi",
    "budi@email.com",
    "0123456789",
    "Pemrograman Web"
);

// Membuat object administrasi
$admin1 = new Administrasi(
    "Siti",
    "siti@email.com",
    "ADM001",
    "Akademik"
);

// Menampilkan data mahasiswa
echo "<h3>Data Mahasiswa</h3>";
$mhs1->tampilkanData();
$mhs1->tampilkanPeran();

echo "<hr>";

// Menampilkan data dosen
echo "<h3>Data Dosen</h3>";
$dosen1->tampilkanData();
$dosen1->tampilkanPeran();

echo "<hr>";

// Menampilkan data administrasi
echo "<h3>Data Administrasi</h3>";
$admin1->tampilkanData();
$admin1->tampilkanPeran();

?>
