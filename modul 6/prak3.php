<?php 

class Pengguna {
    
       public $nama;
       public $email;

       public function __construct($nama, $email) {
           $this->nama = $nama;
           $this->email = $email;
       }

       public function tampilkanData(){
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
       }
}

class Mahasiswa extends Pengguna {

     public $nim;
     public $prodi;

     public function __construct(
        $nama, 
        $email,
        $nim, 
        $prodi
     ){
        parent::__construct($nama, $email);

        $this->nim = $nim;
        $this->prodi = $prodi;
     }

     public function tampilkanDataMahasiswa(){
        $this->tampilkanData();
        
        echo "NIM: " . $this->nim . "<br>";
        echo "Program Study: " . $this->prodi . "<br>";
     }
}

$mhs1 = new mahasiswa (
    "Andi",
    "andi@gmail.com",
    "2301001",
    "Sistem Informasi"
);

$mhs1->tampilkanData();

?>