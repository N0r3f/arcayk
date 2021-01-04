<?php

session_start();
require('../connect.php');

$date=$_POST['date'];
$numAdhesion=$_POST['numAdhesion'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$achatLoc=$_POST['achatLoc'];
$quantite=$_POST['quantite'];
$liqCheq=$_POST['liqCheq'];
$versement=$_POST['versement'];
$intSerial=$_POST['intSerial'];
$originalSerial=$_POST['originalSerial'];

$insert=$db->prepare("INSERT INTO entree(date, numAdhesion, nom, prenom, adresse, telephone, email, achatLoc, quantite, liqCheq, versement, intSerial, originalSerial) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$insert->execute(array($date,$numAdhesion,$nom,$prenom,$adresse,$telephone,$email,$achatLoc,$quantite,$liqCheq,$versement,$intSerial,$originalSerial));

header('Location:../../stat/statAdh.php');

?>