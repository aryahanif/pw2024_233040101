<?php

$mahasiswa = [
    [
        "nama" => "Arya Raihan Hanif",
        "npm" => "233040101",
        "email" => "ARYA.233040101@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "p(1).jpg"
    ],
    [
        "nama" => "Yuji Itadori",
        "npm" => "233040075",
        "email" => "yujiitdr@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "p(2).jpg" 
    ],
    [
        "nama" => "Stark",
        "npm" => "200049911",
        "email" => "warriorstark@gmail.com",
        "jurusan" => "Teknik Mesin",
        "foto" => "p(3).jpg"  
    ],
    [
        "nama" => "Wang Ling",
        "npm" => "000000000",
        "email" => "仙帝@gmail.com",
        "jurusan" => "Sastra Inggris",
        "foto" => "p(4).jpg" 
    ],
    [
        "nama" => "Sung Rong",
        "npm" => "111111111",
        "email" => "閃亮的蓮花@gmail.com",
        "jurusan" => "Ilmu Komunikasi",
        "foto" => "p(5).jpg"  
    ],
    [
        "nama" => "Caelus",
        "npm" => "233070999",
        "email" => "trashcanlover@gmail.com",
        "jurusan" => "Sastra Jawa",
        "foto" => "p(6).jpg"   
    ],
    [
        "nama" => "Stelle",
        "npm" => "243050981",
        "email" => "queenofthecans@gmail.com",
        "jurusan" => "Seni Musik",
        "foto" => "p(7).jpg"
    ],
    [
        "nama" => "Naofumi Iwatani",
        "npm" => "243050891",
        "email" => "banditlordg@gmail.com",
        "jurusan" => "Tenik Industri",
        "foto" => "p(8).jpg"
    ],
    [
        "nama" => "Yusuke Urameshi",
        "npm" => "243050111",
        "email" => "raizen.jr@gmail.com",
        "jurusan" => "Teknik Mesin",
        "foto" => "p(9).jpg"
    ],
    [
        "nama" => "Kiyoka Kudo",
        "npm" => "000111000",
        "email" => "高山の雷帝@gmail.com",
        "jurusan" => "Teknik Mesin",
        "foto" => "p(10).jpg"   
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa UNPAS</title>
</head>
<body>
    <h1>Daftar Mahasiswa UNPAS</h1>
    <?php foreach($mahasiswa as $m) : ?>
        <ul>
            <li><img src="img/<?= $m["foto"]; ?>"></li>
            <li>Nama : <?= $m["nama"]; ?></li>
            <li>NPM : <?= $m["npm"]; ?></li>
            <li>Email : <?= $m["email"]; ?></li>
            <li>Jurusan : <?= $m["jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>