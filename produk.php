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
    // method
    public function getLebel(){
        return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahPrperty = "hahhah";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "30000";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Nail Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "250000";


echo "Komik : ". $produk3->getLebel();
echo "<br>";
echo "Komik : ". $produk4->getLebel();