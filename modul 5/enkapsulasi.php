<php 

class mahasiswa {

   public $nama;
   private $nilai;

}

$mhs1 = new mahasiswa();
$mhs1->nama="Andi";
$mhs1->nilai="90";

echo "Nama : " . $mhs1->nama;

?>