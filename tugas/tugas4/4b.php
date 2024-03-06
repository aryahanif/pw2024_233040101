<?php   
    $hws = array("Motherboard", "Processor", "Hard Disk" , "PC Coller", "VGA Card" , "SSD");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>

    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($hws as $hw): ?>
            <li><?php echo $hw; ?></li>
        <?php endforeach; ?>
    </ol>
    </div>

    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php array_push($hws, "Card Reader", "Modem"); ?>
        <?php sort($hws); ?>
        <?php foreach ($hws as $hwn): ?>
            <li><?php echo $hwn; ?></li>
        <?php endforeach; ?>
    </ol>
    
</body>
</html>

