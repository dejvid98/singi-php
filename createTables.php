<?php 

$pdo = new PDO('mysql:host=localhost;dbname=php1','root');

// $pdo->query("CREATE TABLE magacin (
// id int primary key auto_increment,
// naziv VARCHAR(64),
// lokacija VARCHAR(64)
// )");

// try{
//     $pdo->query("CREATE TABLE testerino(
//         id int primary key,
//         name varchar(30) not null)");
//     // $pdo->query("CREATE TABLE roba (
//     //     roba_id int primary key auto_increment,
//     //     magacin_id int not null,
//     //     naziv VARCHAR(30) NOT NULL,
//     //     lokacija VARCHAR(30) NOT NULL,
//     //     FOREIGN KEY (`magacin_id`) REFERENCES `magacin` (`id`)
//     // )");
// }catch(PDOException $e){
//     print $e;
// }


$pdo->query("CREATE TABLE magacin (
id int primary key auto_increment,
naziv VARCHAR(30) NOT NULL,
lokacija VARCHAR(30) NOT NULL
)");