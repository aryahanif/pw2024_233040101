<?php   
// 1. Membuat array
$hari = array("Senin", "Selasa", "Rabu",);
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Raihan" , 2.5, false];


// 2. Mencetak isi array
// Mencetak 1 elemen pada array, menggunakan indexnya
echo $hari[2];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";


// Mencetak seluruh elemen pada array
// digunakan khusus untuk debugging
// var_dump(); atau print_r();
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";



// 3. Memanipulasi isi array
// Menambah isi array
// di akhir array: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jumat"; 
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";


// di awal array: array_unshift()
array_unshift($mahasiswa, "233040101");
print_r($mahasiswa);
echo "<hr>";


// Menghapus isi array
// di akhir: array: array_pop()
// di awal: array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);



echo "<div style=  "
?>
