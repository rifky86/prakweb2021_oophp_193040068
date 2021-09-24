<?php

//jualan Produk
//Komik
//Game

//Parent Class
class Produk {
    //Property
    public  $judul,
            $penulis,
            $penerbit;
    protected $diskon = 0;
    private $harga;

    // Construktor
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method
    
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getLebel(){
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoProduk() {
        // Komik : Naruto | Masashi Kishimoto,Shonen Jump (Rp.30000) ~ 100 Halaman.        
        $str ="{$this->judul} | {$this->getLebel()} (Rp. {$this->harga})";

        return  $str;
    }
}

//child class Komik
class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $jmlHalaman = 0 ) 
    {
        parent::__construct( $judul,$penulis,$penerbit,$harga);
        
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str ="Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";

        return $str;
    }
}

//Child Class Game
class Game extends Produk {

    public $waktuMain;
    //method
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    }

    public function setDiskon( $diskon )
    {
        $this->diskon = $diskon;
    }


    public function getInfoProduk(){
        $str ="Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";

        return $str;
    }

}

class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLebel()} (Rp.{$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000", "100");
$produk2 = new Game("Uncharted", "Nail Drickmann", "Sony Computer", "250000", "50");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();