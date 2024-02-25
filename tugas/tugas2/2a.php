<?php

$namaDepan = "Arya";
$namaBelakang = "Hanif";

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 === 0 && $i % 5 === 0) {
    echo "$namaDepan $namaBelakang ";
    echo "<br>";
  } elseif ($i % 3 === 0) {
    echo "$namaDepan ";
    echo "<br>";
  } elseif ($i % 5 === 0) {
    echo "$namaBelakang ";
    echo "<br>";
  } else {
    echo "$i ";
    echo "<br>";
  }
}

?>
