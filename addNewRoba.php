<?php
    $pdo = new PDO('mysql:host=localhost;dbname=php1','root');

        $magacinQuery = $pdo->query('SELECT * from magacin');

    if($_POST){
        echo $_POST['magacin'];
        // echo 1;
        // echo $_POST['magacin'];
        // $magacinNaziv = $_POST['magacin'];
        // $findMagacinQuery = 'SELECT * FROM magacin where naziv=:naziv';
        // $findMagacinStatement = $pdo->prepare($findMagacinQuery);
        // $findMagacinStatement->execute(['naziv'=> $magacinNaziv]);
        // $magacinResult = $findMagacinStatement->fetch();
        // var_dump($magacinResult);
        // PHASE 2 ---------------------------------------------------------------------------
        $magacin = 8;
        $naziv = $_POST['naziv'];
        $kolicina = $_POST['kolicina'];
        $insertRobaQuery = 'INSERT INTO roba (magacin_id, naziv, kolicina) values(:magacin,:naziv,:kolicina)';
        $insertRobaStatment = $pdo->prepare($insertRobaQuery);
        $insertRobaStatment->execute(['magacin'=>$magacin,'naziv'=>$naziv,'kolicina'=>$kolicina]);
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
        <h1>Add New Roba</h1>
            <form action='addNewRoba.php' method='POST' class='form'>
                <div class='form-field'>
                    <label for='naziv'>Naziv</label>
                    <input id='naziv' name='naziv' type='text' placeholder='Naziv robe' required/>
                </div>

                <div class='form-field'>
                    <label for='kolicina'>Kolicina</label>
                    <input id='kolicina' name='kolicina' type='text' placeholder='Kolicina robe' required/>
                </div>

                <div class='form-field'>
                    <label for="magacin">Magacin</label>
                    <select id='magacin' name='magacin'>
                        <?php while($row = $magacinQuery->fetch(PDO::FETCH_ASSOC)) : ?>
                        <option value='<?=$row['id']?>'><?=$row['naziv']?></option> 
                        <?php endwhile ?>
                    </select>
                </div>
                
                <!-- <div class='form-field'>
                    <label for="magacin">Magacin</label>
                    <select id='magacin' name='magacin' >
                        <?php while($row = $magacinQuery->fetch(PDO::FETCH_ASSOC)) : ?>
                        <option value="<?php $row['naziv']?>"><?=$row['naziv']?></option> 
                        <?php endwhile ?>
                    </select>
                </div> -->
                <button type='submit' class='button'>Submit</button>
            </form>
    </div>
</body>
    <script src="scripterino.js"></script>
</html>