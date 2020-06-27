<?php
    // Upisite podatke za konekciju baze podataka
    $pdo = new PDO("mysql:host=localhost;dbname=ispit","root");
    $query =  $pdo->query('SELECT * from vlasnik');
    $array = $query->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Home Page - 2017202485</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Singi PHP - Ispit</h1>
        </div>
        <a href="addVlasnik.php" class="button">ADD NEW VLASNIK</a>

        <table>
            <tr>
                <th>JMBG</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Adresa</th>
                <th>Detalji</th>
                <th>Racuni</th>
            </tr>
            <?php foreach($array as $item): ?>
                <tr>
                    <td><?=$item['jmbg'] ?></td>
                    <td><?=$item['ime'] ?></td>
                    <td><?=$item['prezime'] ?></td>
                    <td><?=$item['adresa'] ?></td>
                    <td>
                        <a style="color:#4285F4" href='details.php?id=<?php echo $item['jmbg']?>'>Details</a>
                    </td>
                    <td>
                        <a style="color:#4285F4" href='accounts.php?id=<?php echo $item['jmbg']?>'>Accounts</a>
                    </td>
                </tr>
            <?php endforeach ?>                
        </table>
    </div>

</body>
</html>