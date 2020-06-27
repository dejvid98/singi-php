<?php
    if($_GET){
        $id = $_GET['id'];

        $jmbg = $_GET['jmbg'];

        $pdo = new PDO("mysql:host=localhost;dbname=ispit","root");
        
        $query = 'DELETE FROM racun WHERE id=:id';

        $stmt= $pdo->prepare($query);

        $stmt->execute(['id' => $id]);

        header("Location: accounts.php?id=" . $jmbg);
    }
?>