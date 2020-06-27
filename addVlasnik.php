<?php
    // Upisite podatke za konekciju baze podataka
    $pdo = new PDO("mysql:host=localhost;dbname=ispit","root");

    if($_POST){
        $jmbg = $_POST['jmbg'];

        $ime = $_POST['ime'];

        $prezime = $_POST['prezime'];

        $adresa = $_POST['adresa'];

        $query = 'INSERT INTO vlasnik(jmbg,ime,prezime,adresa) values(:jmbg,:ime,:prezime,:adresa)';

        $stmt= $pdo->prepare($query);

        $stmt->execute(['jmbg' => $jmbg, 'ime' => $ime,'prezime' => $prezime, 'adresa' => $adresa]);

        header("Location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Add Vlasnik - 2017202485</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Add New Vlasnik</h1>
        </div>

        <form action="addVlasnik.php" method='POST' class="form">
            <input type="text" placeholder="JMBG" required id="jmbg" name="jmbg">
            <input type="text" placeholder="Ime" required id="ime" name="ime">
            <input type="text" placeholder="Prezime" required id="prezime" name="prezime">
            <input type="text" placeholder="Adresa" required id="adresa" name="adresa">
            <button>ADD</button>
        </form>
    </div> 
</body>
</html>