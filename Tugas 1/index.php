<?php

include "Animal.php";

class Kucing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
} 

$momo = new Kucing;
$momo->jumlah_kaki = 4;
$momo->bisa_terbang = "tidak bisa terbang";
$momo->suara = "meong";

echo "Momo Adalah Kucing <br>";
echo "Punya kaki sebanyak: ".$momo->jumlah_kaki. "<br>";
echo $momo->bisa_terbang. "<br>";
echo "suaranya: ".$momo->suara. "<br>";

echo "<hr>";

class Anjing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
$doggo->bisa_terbang = "tidak bisa terbang";
$doggo->suara = "guk guk";

echo "Doggo Adalah Anjing <br>";
echo "Punya kaki sebanyak: ".$doggo->jumlah_kaki. "<br>";
echo $doggo->bisa_terbang. "<br>";
echo "suaranya: ".$doggo->suara. "<br>";

echo "<hr>";

class Elang{
    public $nama, $jumlah_kami, $bisa_terbang, $suara;
}
$zya = new Elang;
$zya->jumlah_kaki = 2;
$zya->bisa_terbang = "bisa terbang";
$zya->suara = "mip mip";

echo "Zya Adalah Elang <br>";
echo "Punya kaki sebanyak: ".$zya->jumlah_kaki. "<br>";
echo $zya->bisa_terbang. "<br>";
echo "suaranya: ".$zya->suara. "<br>";

echo "<hr>";

class Angsa{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$masha = new Angsa;
$masha->jumlah_kaki = 2;
$masha->bisa_terbang = "bisa terbang";
$masha->suara = "kwaaak";

echo "Masha Adalah Angsa <br>";
echo "Punya kaki sebanyak: ".$masha->jumlah_kaki. "<br>";
echo $masha->bisa_terbang. "<br>";
echo "suaranya: ".$masha->suara. "<br>";