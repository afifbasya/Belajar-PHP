<?php
$x = 30;
$y = 50;
$z = 30;

echo "Operator Aritmatika";
echo "<br /> Hasil Tambah $x + $y = " . $x + $y;
echo "<br/> Hasil Kurang $x - $y = " . $x - $y;
echo "<br/> Hasil Kali $x * $y = " . $x * $y;
echo "<br/> Hasil Bagi $x / $y = " . $x / $y;
echo "<br/> Hasil Modulus $x % $y = " . $x % $y;

echo "<br /> <br /> Operator Komparasi <br />";
echo var_dump($x == $y);


echo "<br /> <br /> IF ELSE <br />";

//3 macam (if saja, if else, dan if elseif else)
if ($x > $y) {
    echo "X lebih dari Y";
} else {
    echo "X kurang dari Y";
}

echo "<br />";
if ($x > $y) {
    echo "X lebih dari Y";
} else if ($x == $y) {
    echo "X sama dengan Y";
} else if ($x != $y) {
    echo "X tidak sama dengan Y";
} else if ($x >= $y) {
    echo "X lebih dari sama dengan Y";
} else {
    echo "X kurang dari Y";
}


echo "<br />";

$andi = 23;
$eko = 20;

if ($andi > $eko) {
    echo "Umur Andi Lebih Tua dari Eko";
} else {
    echo "Umur Eko Lebih Tua dari Andi";
}
