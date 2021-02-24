<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=projekti", "root", "Shpati123.");
}catch(PDOException $pdo){
    die("Lidhja me DB - Deshtoi!");
}

?>