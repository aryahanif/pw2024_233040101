<?php
// Menghitung total volume dua kubus
// sisi kubus a = 9, sisi kubus b = 4
// $a = 9;
// $b = 4;
// $volume_a = $a * $a * $a;
// $volume_b = $b * $b * $b;
// $total = $volume_a + $volume_b;
// echo "Total volume kubus A & B = $total";

function total_volume_dua_kubus($a, $b) {
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;
    return $total;
}

echo "Total volume kubus A & B = " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total volume kubus C & D = " . total_volume_dua_kubus(10, 15);
echo "<br>";
echo "Total volume kubus E & F = " . total_volume_dua_kubus(20, 30);




