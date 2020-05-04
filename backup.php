<?php
    $pdo = new PDO('mysql:host=localhost;dbname=php1','root');

        $magacinQuery = $pdo->query('SELECT * from magacin');

    if($_POST){
        $findMagacinQuery = 'SELECT * from magacin where naziv=:nazivMag';
        $findMagacinStatement = $pdo->prepare($findMagacinQuery);
        $findMagacinStatement->execute(['nazivMag'=>'Maxi']);
        $result = $findMagacinStatement->fetch();
        $magacin = $result['id'];

        $naziv = $_POST['naziv'];

        $kolicina = $_POST['kolicina'];

        $query = 'INSERT INTO roba(magacin_id,naziv,lokacija) values(:magacin,:naziv,:kolicina)';

        $stmt= $pdo->prepare($query);

        $stmt->execute(['magacin'=> $magacin,'naziv' => $naziv, 'kolicina' => $kolicina]);
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
                    <select id="magacin" name='magacin' >
                        <?php while($row = $magacinQuery->fetch(PDO::FETCH_ASSOC)) : ?>
                        <option value="<?php $row['naziv']?>"><?=$row['naziv']?></option> 
                        <?php endwhile ?>
                    </select>
                </div>
                <button type='submit' class='button'>Submit</button>
            </form>
    </div>
</body>
    <script src="scripterino.js"></script>
</html>