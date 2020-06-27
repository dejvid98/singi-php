<?php
    // Upisite podatke za konekciju baze podataka
    $pdo = new PDO("mysql:host=localhost;dbname=ispit","root");

    if($_GET){
        $jmbg = $_GET['jmbg'];

        $stanje = 0;

        $query = 'INSERT INTO racun(vlasnik_jmbg,stanje) values(:jmbg,:stanje)';

        $stmt= $pdo->prepare($query);

        $stmt->execute(['jmbg' => $jmbg, 'stanje' => $stanje]);

        header("Location: accounts.php". "?id=" . $jmbg);

    }

?>


