<?php

session_start();
require('../connect.php');

$date=$_POST['date'];
$serial= htmlspecialchars($_POST['serial']);
$marque=$_POST['marque'];
$modele=$_POST['modele'];
$etat=$_POST['etat'];

$insert=$db->prepare("INSERT INTO keyboard(date, serial, marque, modele, etat) VALUES(?, ?, ?, ?, ?)");
$insert->execute(array($date,$serial,$marque,$modele,$etat));

header('Location:../../stat/statKeyboard.php');

?>