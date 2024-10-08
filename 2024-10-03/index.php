Selesaikan Perhitungan Ini 7 % 5 + 8 * 4 - 9 / 3 Menggunakan Function

<?php
echo "<br>";

$y = modulo(7, 5);
$y = tambah($y, 8);
$y = kali($y, 4);
$x = bagi(9, 3);
$y = kurang($y, $x);
echo $y;


echo "<br>";

$hasil = tambah(5, kali(3, 7));
$hasil = bagi($hasil, 4);
$hasil = kurang($hasil, 9);
$hasil = modulo($hasil, 8);
echo $hasil;
    function kali($a, $b) {
        $c = $a * $b;
        return $c;
    }
    function tambah($a, $b) {
        $c = $a + $b;
        return $c;
    }
    function kurang($a, $b) {
        $c = $a - $b;
        return $c;
    }

    function bagi($a, $b) {
        $c = $a / $b;
        return $c;
    }


    function modulo ($a, $b) {
        $c = $a % $b;
        return $c;
    
    }
?>
    



?>