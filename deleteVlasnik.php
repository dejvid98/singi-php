<?php
    if($_POST['id']){
        $id = $_POST['id'];

        $pdo = new PDO("mysql:host=localhost;dbname=ispit","root");
        
        $query = 'DELETE FROM vlasnik WHERE jmbg=:id';

        $stmt= $pdo->prepare($query);

        $stmt->execute(['id' => $id]);

        header("Location: index.php");
    }
?>