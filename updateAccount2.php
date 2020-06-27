<?php
    $jmbg;
    $id;

    if($_GET){
        $jmbg = $_GET['jmbg'];
        $id = $_GET['id'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Change Balanced - 2017202485</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Change balance</h1>
        </div>

        <form action="updateAccount.php" method='POST' class="form">
            <input type="hidden" placeholder="ID" required id="id" name="id" value="<?php echo $id ?>">
            <input disabled type="text" placeholder="JMBG" required id="jmbgg" name="jmbg" value="<?php echo $jmbg ?>">
            <input type="hidden" placeholder="JMBG" required id="jmbg" name="jmbg" value="<?php echo $jmbg ?>">
            <input type="text" placeholder="Stanje" required id="stanje" name="stanje">
            <button>UPDATE BALANCE</button>
        </form>
    </div> 
</body>
</html>