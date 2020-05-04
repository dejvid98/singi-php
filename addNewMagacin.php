<?php
    $pdo = new PDO('mysql:host=localhost;dbname=php1','root');

    if($_POST){
        $naziv = $_POST['naziv'];

        $lokacija = $_POST['lokacija'];

        $query = 'INSERT INTO magacin(naziv,lokacija) values(:naziv,:lokacija)';

        $stmt= $pdo->prepare($query);

        $stmt->execute(['naziv' => $naziv, 'lokacija' => $lokacija]);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Magacin</title>
    <link rel="stylesheet" href="addNewMagacin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class='wrapper'>
        <h1>Add New Magacin</h1>
            <form action='addNewMagacin.php' method='POST' class='form'>
                <label for='naziv'>Naziv</label>
                <input id='naziv' name='naziv' type='text' placeholder='Naziv magacina' required/>
                <br>

                <label for='lokacija'>Lokacija</label>
                <input id='lokacija' name='lokacija' type='text' placeholder='Lokacija magacina' required/>
                <br>

                <button type='submit' class='button'>Submit</button>
            </form>
    </div>
</body>
    <script src="scripterino.js"></script>
</html>