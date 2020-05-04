<?php
    include 'createUser.php';
    $pdo = new PDO('mysql:host=localhost;dbname=phpTest','root');
    // $pdo->query("CREATE DATABASE phpTest");
  

    if($_POST){
        $firstName = $_POST['fname'];

        $lastName = $_POST['lname'];

        $email = $_POST['email'];

        print 'First name : ' . $firstName . '<br>';

        print 'Last name : ' . $lastName . '<br>';

        print 'Email :' . $email . '<br>';

        $insertQuery = 'INSERT INTO users (firstName,lastName,email) values (:firstName, :lastName, :email)';
        $stmt = $pdo->prepare($insertQuery);
        $stmt->execute(['firstName' => $firstName,
                        'lastName'  => $lastName,
                        'email'     => $email]);

    }
    $stmt =  $pdo->query("SELECT * FROM myguests");

    while($row = $stmt->fetchObject()){
    echo $row->firstname;
}

    // $pdo->query("CREATE TABLE users (
    // firstName VARCHAR(30) NOT NULL,
    // lastName VARCHAR(30) NOT NULL,
    // email VARCHAR(50)
    // )");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="createUser .php" method="POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" placeholder="First Name"><br><br>

        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname"><br><br>

        <label for="email">Last name:</label>
        <input type="text" id="email" name="email"><br><br>

        <button type="submit" >Submit</button>    
    </form>
    <style>
    input[type=text] {
    padding:5px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 15px;
}

input[type=text]:focus {
    border-color:#307cff;
}

button{
    padding:5px 15px;
    border-radius:25px;
    border-color:#fff;
    background-color:#0074D9;
    font-size:1.3rem;
    color:#fff;
}

    </style>
</body>
</html>
