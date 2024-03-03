<?php
function cetak_angka($baris) {
    $angka = 1;
    for($i = 1; $i <= $baris; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo $angka . " ";
            $angka++;
        }
        echo "<br>";
}
}

echo cetak_angka(5);

?>
