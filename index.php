<?php
    $pdo = new PDO("mysql:host=localhost;dbname=php1","root");

    $magacinQuery =  $pdo->query('SELECT * from magacin');

    $arr = $magacinQuery->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="addNewMagacin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class='wrapper'>
        <h1>Singi PHP</h1>
        <button>
         <a href='addNewMagacin.php'>Add New Magacin</a>
        </button>
        <!-- <div class='magacini-lista'>
            <?php while($row = $magacinQuery->fetch(PDO::FETCH_ASSOC)): ?>
                <div class='magacin-wrapper'>
                    <p>Naziv : <?=$row['naziv'] ?></p>
                    <p>Lokacija : <?=$row['lokacija'] ?></p>
                </div>
            <?php endwhile ?>
        </div> -->
        <div class='magacini-lista'>
            <?php foreach($arr as $item): ?>
                <div class='magacin-wrapper'>
                    <p>Naziv : <?=$item['naziv'] ?></p>
                    <p>Lokacija : <?=$item['lokacija'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>