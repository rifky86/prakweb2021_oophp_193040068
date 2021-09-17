<?php

//jualan Produk
//Komik
//Game

class Produk {
    //Property
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    // Construktor
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    // method
    public function getLebel(){
        return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000");
$produk2 = new Produk("Uncharted", "Nail Drickmann", "Sony Computer", "250000");
$produk3 = new Produk("Dragonball");

echo "Komik : ". $produk1->getLebel();
echo "<br>";
echo "Game : ". $produk2->getLebel();
echo "<br>";
var_dump($produk3);
