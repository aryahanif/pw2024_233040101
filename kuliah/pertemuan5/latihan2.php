<?php   
$binatang = ["🐈", "🐟", "🦀", "🐄", "🐕",];
$mangan = ["🍚", "🍛", "🍜", "🍝", "🍟",];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    <h3>Daftar Binatang</h3>
    <ol>
    <?php for ($i = 0; $i < count($binatang); $i++) { ?>
        <li> <?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ol>

    <h3>Daftar Makanan</h3>
    <ul>
    <?php for ($i = 0; $i < count($mangan); $i++) { ?>
        <li> <?php echo $mangan[$i]; ?></li>
        <?php } ?>
    </ul>

    <hr>

    <h3>Daftar Binatang</h3>
    <ol>
        <?php foreach ($binatang as $b) : ?>
            <li><?= $b; ?></li>
        <?php endforeach ?>
    </ol>

    <hr>

    <h3>Daftar Mangan</h3>
    <ul>
        <?php foreach ($mangan as $m) : ?>
            <li><?= $m; ?></li>
        <?php endforeach ?>
</body>
</html>