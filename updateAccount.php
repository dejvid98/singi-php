<?php
    if($_POST){
        $pdo = new PDO("mysql:host=localhost;dbname=ispit","root");

        $stanje = $_POST['stanje'];

        $id = $_POST['id'];

        $jmbg = $_POST['jmbg'];

        $query = 'UPDATE racun SET stanje=:stanje WHERE id=:id';

        $stmt= $pdo->prepare($query);

        $stmt->execute(['id' => $id, 'stanje' => $stanje]);

        header("Location: accounts.php?id=".$jmbg);
    }
?>