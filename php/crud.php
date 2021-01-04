<?php
session_start();
require('moteur/connect.php');
require_once('moteur/close.php');
?>
<html>
<head>
<title> CRUD </title>
    <link rel="icon" type="image/bmp" href="../img/crud.bmp"/>
    <link rel="stylesheet" type="text/css" href="../css/main/crudMain.css">
</head>
<body>  
<aside>
    <a href="crud.php"><img src="../img/crud.png" alt="CRUD"></a>
    <a href="home.php"><img src="../img/home.svg" alt="Revenir à l'accueil"></a>
    <a href="stat.php"><img src="../img/stat.svg" alt="Statistiques"></a>
</aside>
<!-- HEADERS UC -->
<div id="content">
<span class="title1">ID</span>
<span class="title2">SERIAL</span>
<span class="title3">MARQUE</span>
<span class="title4">MODELE</span>
<span class="title5">ETAT</span>
<span class="title6">ACTION</span>
</div>
<!-- CONNEXION UC -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM uc ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>
<!-- LIGNES UC -->
<div id="content">
    <span class="req1"><?=$resultat['id'];?></span>
    <span class="req2"><?=$resultat['serial'];?></span>
    <span class="req3"><?=$resultat['marque'];?></span>
    <span class="req4"><?=$resultat['modele'];?></span>
    <span class="req5"><?=$resultat['etat'];?></span>
    <span class="req6">
    <a href="crud/add/addUc.php?id=<?= $resultat['id'] ?>"><button id="new"></button></a>
    <a href="crud/edit/editUc.php?id=<?= $resultat['id'] ?>"><button id="edit"></button></a>
    <a href="crud/delete/deleteUc.php?id=<?= $resultat['id'] ?>"><button id="del"></button></a>
    </span>    
</div>
<?php } $requete->closeCursor(); ?>
<!-- FIN CONNEXION UC -->
<!-- HEADERS SCREEN -->
<div id="content">
<span class="title1">ID</span>
<span class="title2">SERIAL</span>
<span class="title3">MARQUE</span>
<span class="title4">MODELE</span>
<span class="title5">ETAT</span>
<span class="title6">ACTION</span>
</div>
<!-- CONNEXION SCREEN -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM screen ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>
<!-- LIGNES SCREEN -->
<div id="content">
    <span class="req1"><?=$resultat['id'];?></span>
    <span class="req2"><?=$resultat['serial'];?></span>
    <span class="req3"><?=$resultat['marque'];?></span>
    <span class="req4"><?=$resultat['modele'];?></span>
    <span class="req5"><?=$resultat['etat'];?></span>
    <span class="req6">
    <a href="crud/add/addScreen.php?id=<?= $resultat['id'] ?>"><button id="new"></button></a>
    <a href="crud/edit/editScreen.php?id=<?= $resultat['id'] ?>"><button id="edit"></button></a>
    <a href="crud/delete/deleteScreen.php?id=<?= $resultat['id'] ?>"><button id="del"></button></a>
</span>
</div>
<?php } $requete->closeCursor(); ?>
<!-- FIN CONNEXION SCREEN -->
<!-- HEADERS KEYBOARD -->
<div id="content">
<span class="title1">ID</span>
<span class="title2">SERIAL</span>
<span class="title3">MARQUE</span>
<span class="title4">MODELE</span>
<span class="title5">ETAT</span>
<span class="title6">ACTION</span>
</div>
<!-- CONNEXION KEYBOARD -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM keyboard ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>
<!-- LIGNES KEYBOARD -->
<div id="content">
    <span class="req1"><?=$resultat['id'];?></span>
    <span class="req2"><?=$resultat['serial'];?></span>
    <span class="req3"><?=$resultat['marque'];?></span>
    <span class="req4"><?=$resultat['modele'];?></span>
    <span class="req5"><?=$resultat['etat'];?></span>
     <span class="req6">
     <a href="crud/add/addKeyboard.php?id=<?= $resultat['id'] ?>"><button id="new"></button></a>
    <a href="crud/edit/editKeyboard.php?id=<?= $resultat['id'] ?>"><button id="edit"></button></a>
    <a href="crud/delete/deleteKeyboard.php?id=<?= $resultat['id'] ?>"><button id="del"></button></a>
    </span>
</div>
<?php } $requete->closeCursor(); ?>
<!-- FIN CONNEXION KEYBOARD -->
<!-- HEADERS MOUSE -->
<div id="content">
<span class="title1">ID</span>
<span class="title2">SERIAL</span>
<span class="title3">MARQUE</span>
<span class="title4">MODELE</span>
<span class="title5">ETAT</span>
<span class="title6">ACTION</span>
</div>
<!-- CONNEXION MOUSE -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM mouse ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>
<!-- LIGNES MOUSE -->
<div id="content">
    <span class="req1"><?=$resultat['id'];?></span>
    <span class="req2"><?=$resultat['serial'];?></span>
    <span class="req3"><?=$resultat['marque'];?></span>
    <span class="req4"><?=$resultat['modele'];?></span>
    <span class="req5"><?=$resultat['etat'];?></span>
     <span class="req6">
     <a href="crud/add/addMouse.php?id=<?= $resultat['id'] ?>"><button id="new"></button></a>
    <a href="crud/edit/editMouse.php?id=<?= $resultat['id'] ?>"><button id="edit"></button></a>
    <a href="crud/delete/deleteMouse.php?id=<?= $resultat['id'] ?>"><button id="del"></button></a>
    </span>
 </div>
<?php } $requete->closeCursor(); ?>
<!-- FIN CONNEXION MOUSE -->
<!-- HEADERS LAPTOP -->
<div id="content">
<span class="title1">ID</span>
<span class="title2">SERIAL</span>
<span class="title3">MARQUE</span>
<span class="title4">MODELE</span>
<span class="title5">ETAT</span>
<span class="title6">ACTION</span>
</div>
<!-- CONNEXION LAPTOP -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM laptop ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>
<!-- LIGNES LAPTOP -->
<div id="content">
    <span class="req1"><?=$resultat['id'];?></span>
    <span class="req2"><?=$resultat['serial'];?></span>
    <span class="req3"><?=$resultat['marque'];?></span>
    <span class="req4"><?=$resultat['modele'];?></span>
    <span class="req5"><?=$resultat['etat'];?></span>
     <span class="req6">
     <a href="crud/add/addLaptop.php?id=<?= $resultat['id'] ?>"><button id="new"></button></a>
    <a href="crud/edit/editLaptop.php?id=<?= $resultat['id'] ?>"><button id="edit"></button></a>
    <a href="crud/delete/deleteLaptop.php?id=<?= $resultat['id'] ?>"><button id="del"></button></a>
    </span></div>
<?php } $requete->closeCursor(); ?>
<!-- FIN CONNEXION LAPTOP -->
<!-- HEADERS TABLET -->
<div id="content">
<span class="title1">ID</span>
<span class="title2">SERIAL</span>
<span class="title3">MARQUE</span>
<span class="title4">MODELE</span>
<span class="title5">ETAT</span>
<span class="title6">ACTION</span>
</div>
<!-- CONNEXION TABLET -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM tablet ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>
<!-- LIGNES TABLET -->
<div id="content">
    <span class="req1"><?=$resultat['id'];?></span>
    <span class="req2"><?=$resultat['serial'];?></span>
    <span class="req3"><?=$resultat['marque'];?></span>
    <span class="req4"><?=$resultat['modele'];?></span>
    <span class="req5"><?=$resultat['etat'];?></span>
     <span class="req6">
     <a href="crud/add/addTablet.php?id=<?= $resultat['id'] ?>"><button id="new"></button></a>
    <a href="crud/edit/editTablet.php?id=<?= $resultat['id'] ?>"><button id="edit"></button></a>
    <a href="crud/delete/deleteTablet.php?id=<?= $resultat['id'] ?>"><button id="del"></button></a>
    </span></div>
<?php } $requete->closeCursor(); ?>
<!-- FIN CONNEXION TABLET -->
<!-- HEADERS PRINT -->
<div id="content">
<span class="title1">ID</span>
<span class="title2">SERIAL</span>
<span class="title3">MARQUE</span>
<span class="title4">MODELE</span>
<span class="title5">ETAT</span>
<span class="title6">ACTION</span>
</div>
<!-- CONNEXION PRINT -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM print ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>
<!-- LIGNES PRINT -->
<div id="content">
    <span class="req1"><?=$resultat['id'];?></span>
    <span class="req2"><?=$resultat['serial'];?></span>
    <span class="req3"><?=$resultat['marque'];?></span>
    <span class="req4"><?=$resultat['modele'];?></span>
    <span class="req5"><?=$resultat['etat'];?></span>
     <span class="req6">
     <a href="crud/add/addPrint.php?id=<?= $resultat['id'] ?>"><button id="new"></button></a>
    <a href="crud/edit/editPrint.php?id=<?= $resultat['id'] ?>"><button id="edit"></button></a>
    <a href="crud/delete/deletePrint.php?id=<?= $resultat['id'] ?>"><button id="del"></button></a>
    </span></div>
<?php } $requete->closeCursor(); ?>
<!-- FIN CONNEXION PRINT -->
</body>
</html>