<?php
    // Upisite podatke za konekciju baze podataka
    $pdo = new PDO("mysql:host=localhost;dbname=ispit","root");

    $user;
    $jmbg;
    if($_GET){
        $id = $_GET['id'];
        
        $query = 'SELECT * FROM vlasnik WHERE jmbg=:id';

        $stmt= $pdo->prepare($query);

        $stmt->execute(['id' => $id]);

        $user = $stmt->fetch();

        $jmbg = $user['jmbg'];
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Details- 2017202485</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Details</h1>
        </div>

        <form action="deleteVlasnik.php" method='post'>
            <input type="hidden" value="<?php echo $_GET['id']?>" id="id" name="id">
            <button style="background-color:red">DELETE</button>
        </form>

        <form action="updateVlasnik.php" method='GET' class="form">
            <input disabled type="text" placeholder="JMBG" required id="jmbgz" name="jmbgz" value="<?=$jmbg ?>">
            <input type="hidden" placeholder="JMBG" required id="jmbg" name="jmbg" value="<?=$user['jmbg'] ?>">
            <input type="text" placeholder="Ime" required id="ime" name="ime" value="<?=$user['ime']?>">
            <input type="text" placeholder="Prezime" required id="prezime" name="prezime" value="<?=$user['prezime']?>">
            <input type="text" placeholder="Adresa" required id="adresa" name="adresa" value="<?=$user['adresa']?>">
            <button>UPDATE</button>
        </form>
    </div> 
</body>
</html>