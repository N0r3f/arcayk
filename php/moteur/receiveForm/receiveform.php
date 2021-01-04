<?php

session_start();
require('dbconnect.php');

$datadhesion=$_POST['datadhesion'];
$numadhesion=$_POST['numadhesion'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$achatloc=$_POST['achatloc'];
$quantite=$_POST['quantite'];
$liqcheq=$_POST['liqcheq'];
$versement=$_POST['versement'];
$intserial=$_POST['intserial'];
$originalserial=$_POST['originalserial'];

$insert=$db->prepare("INSERT INTO entree(datadhesion, numadhesion, nom, prenom, adresse, telephone, email, achatloc, quantite, liqcheq, versement, intserial, originalserial) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$insert->execute(array($datadhesion,$numadhesion,$nom,$prenom,$adresse,$telephone,$email,$achatloc,$quantite,$liqcheq,$versement,$intserial,$originalserial));

header('Location:youwin.php');

?>