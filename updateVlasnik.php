<?php
    if($_GET){
        $pdo = new PDO("mysql:host=localhost;dbname=ispit","root");

        $jmbg = $_GET['jmbg'];

        $ime = $_GET['ime'];

        $prezime = $_GET['prezime'];

        $adresa = $_GET['adresa'];

        $query = 'UPDATE vlasnik SET jmbg=:jmbg,ime=:ime,prezime=:prezime,adresa=:adresa WHERE jmbg=:id';

        $stmt= $pdo->prepare($query);

        $stmt->execute(['jmbg' => $jmbg, 'ime' => $ime,'prezime' => $prezime, 'adresa' => $adresa,'id'=>$jmbg]);

        header("Location: index.php");
    }
?>