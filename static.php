<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function hallo()
//     {
//         return "Hallo ". self::$angka++ . " kali";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::hallo();
// echo "<hr>";
// echo ContohStatic::hallo();

class Contoh{
    public static $angka = 1;

    public function halo()
    {
        return "Hallo " . self::$angka++ . " Kali. <br>";
    }

}
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();










?>