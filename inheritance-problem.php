<?php

//jualan Produk
//Komik
//Game

class Produk {
    //Property
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    // Construktor
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalman = $jmlHalaman;
        $this->waktuMain= $waktuMain;
        $this->tipe = $tipe;
    }
    // method
    public function getLebel(){
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoLengkap() {
        // Komik : Naruto | Masashi Kishimoto,Shonen Jump (Rp.30000) ~ 100 Halaman.        
        $str ="{$this->tipe} : {$this->judul} | {$this->getLebel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " ~ {$this->jmlHalman} Halaman.";
        } else if ($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return  $str;
    }
}


class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLebel()} (Rp.{$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000", "100", "0", "Komik");
$produk2 = new Produk("Uncharted", "Nail Drickmann", "Sony Computer", "250000", "0", "50", "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();