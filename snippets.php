<?php 

    // CONNECT TO DATABASE
    $pdo = new PDO("mysql:host=localhost;dbname=singiphp","root");


    // SELECT ALL

    $query =  $pdo->query('SELECT * from vlasnik');

    $array = $query->fetchAll();




    // INSERT 

    if($_POST){
    $magacin = $_POST['magacin'];

    $naziv = $_POST['naziv'];

    $kolicina = $_POST['kolicina'];

    $insertRobaQuery = 'INSERT INTO roba (magacin_id, naziv, kolicina) values(:magacin,:naziv,:kolicina)';

    $insertRobaStatment = $pdo->prepare($insertRobaQuery);

    $insertRobaStatment->execute(['magacin'=>$magacin,'naziv'=>$naziv,'kolicina'=>$kolicina]);
}
?>

<!-- Render array  -->
<?php foreach($arr as $item): ?>
    <div class='magacin-wrapper'>
        <p>Ime : <?=$item['Ime'] ?></p>
        <p>Prezime : <?=$item['Prezime'] ?></p>
    </div>
<?php endforeach ?>
    