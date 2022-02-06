<?php
echo("Bangun Datar <br>");
echo("Persegi panjang <br>");
$panjang = 10;
$lebar =5;

$l1 = $panjang*$lebar;

echo("panjang persegi panjang  dari $panjang*$lebar= $l1 <br>");

echo("Persegi <br>");
$p = 5;
$l = 5;
$l2= $p*$l;
echo("panjang persegi dari $p*$l = $l2<br>");

echo("lingkaran <br>");
$r=14;

$lingkaran = 3.14*$r*$r;
echo("luas lingkaran dari  jari-jari $r= $lingkaran<br>");

echo("segitiga <br>");
$alas=30;
$tinggi=10;

$luas=0.5* $alas*$tinggi;

echo("Luas Segitiga 0.5*$alas*$tinggi = $luas<br>");

echo("Belah Ketupat <br>");
$d1 = 6;
$d2 = 8;

$lbk=0.5*$d1*$d2;

echo("luas belah ketupat 0.5*$d1*$d2 =$lbk");

echo(" <br>Volume Kubus V=r*r*r ");
$r =2;

$volume_kbs = pow($r,3);
echo(" <br>Volume kubus dengan jari-jari 2 adalah = $volume_kbs <br>");

echo(" <br>Volume Balok v=p*l*t");
$t =4;
$volume_blk=$panjang*$lebar*$t;
echo(" <br>Volume balok dengan panjang $panjang lebar $lebar tinggi $t adalah = $volume_blk");

echo(" <br> volume tabung");

$volume_tbg=3.14*$r*$r*$t;
echo(" <br>Volume tabung dengan phi 3.14 r=$r tinggi $t adalah = $volume_tbg");
?>