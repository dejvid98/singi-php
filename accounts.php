<?php
    // Upisite podatke za konekciju baze podataka
    $pdo = new PDO("mysql:host=localhost;dbname=ispit","root");

    $accounts;

    if($_GET){
        $id = $_GET['id'];
        
        $query = 'SELECT * FROM racun WHERE vlasnik_jmbg=:id';

        $stmt= $pdo->prepare($query);

        $stmt->execute(['id' => $id]);

        $accounts = $stmt->fetchAll();
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Accounts- 2017202485</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Accounts</h1>
        </div>

        <a href="addAccount.php?jmbg=<?php echo $_GET['id']?>" class="button">ADD NEW ACCOUNT</a>


        <table>
            <tr>
                <th>ID</th>
                <th>Stanje</th>
                <th>Delete</th>
                <th>Change</th>
            </tr>
            <?php foreach($accounts as $item): ?>
                <tr>
                    <td><?=$item['id'] ?></td>
                    <td><?=$item['stanje'] ?></td>
                    <td><a href='deleteAccount.php?id=<?php echo $item['id']?>&jmbg=<?php echo $item['vlasnik_jmbg']?>'>Delete</a></td>
                    <td><a>Change</a></td>
                </tr>
            <?php endforeach ?>                
        </table>
    </div> 
</body>
</html>