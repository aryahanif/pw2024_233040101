<?php
$rLuas= 10;
$rKeliling = 20;

function hitungLuasLingkaran($r) {
    $luas = 3.14 * $r * $r;
    return $luas;
}

function hitungKelilingLingkaran($r) {
    $keliling = 3.14 * 2 * $r;
    return $keliling;
}


echo "<h4>Menghitung Luas Lingkaran</h4>";
echo "<br>";
echo "Jari-jari = $rLuas cm²";
echo "<br>";
echo "Luas Lingkaran = " . hitungLuasLingkaran($rLuas) . " cm²";
echo "<hr>";
echo "<h4>Menghitung Keliling Lingkaran</h4>";
echo "<br>";
echo "Jari-jari = $rKeliling cm";
echo "<br>";
echo "Keliling Lingkaran = " . hitungKelilingLingkaran($rKeliling) . " cm";

?>
