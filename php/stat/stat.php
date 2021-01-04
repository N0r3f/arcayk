<html>
<head>

    <title> LISTE DU MATRIEL </title>
    <link rel="icon" type="image/bmp" href="../../img/stat.bmp"/>
    <link rel="stylesheet" type="text/css" href="../../css/main/stat.css">

</head>
<body>  

    <aside>
    <a href="../stat.php"><img src="../../img/stat.png" alt="Consulter les statistiques"></a>
    <a href="../home.php"><img src="../../img/home.svg" alt="Revenir à l'accueil"></a>
    <a href="../crud.php"><img src="../../img/crud.svg" alt="Modifier/Ajouter par lot"></a>
    </aside>

    <!-- HEADERS UC -->
        <div id="content">
        <span class="title1">UC</span>
        <span class="title2">SERIAL</span>
        <span class="title3">MARQUE</span>
        <span class="title4">MODELE</span>
        <span class="title5">ETAT</span>
        </div>

    <!-- CONNEXION UC -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM uc ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>

    <!-- LIGNES UC -->
    <div id="content">
    <span class="req1">
    <?php echo $resultat['id']; ?></span>
    <span class="req2">
    <?php echo $resultat['serial']; ?></span>
    <span class="req3">
    <?php echo $resultat['marque']; ?></span>
    <span class="req4">
    <?php echo $resultat['modele']; ?></span>
    <span class="req5">
    <?php echo $resultat['etat']; ?></span>
    </div>

<?php } $requete->closeCursor(); ?>
    <!-- FIN CONNEXION UC -->

    <!-- HEADERS SCREEN -->
    <div id="content">
    <span class="title1">SCREEN</span>
    <span class="title2">SERIAL</span>
    <span class="title3">MARQUE</span>
    <span class="title4">MODELE</span>
    <span class="title5">ETAT</span>
    </div>

    <!-- CONNEXION SCREEN -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM screen ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>

    <!-- LIGNES SCREEN -->
    <div id="content">
    <span class="req1">
    <?php echo $resultat['id']; ?></span>
    <span class="req2">
    <?php echo $resultat['serial']; ?></span>
    <span class="req3">
    <?php echo $resultat['marque']; ?></span>
    <span class="req4">
    <?php echo $resultat['modele']; ?></span>
    <span class="req5">
    <?php echo $resultat['etat']; ?></span>
    </div>

<?php } $requete->closeCursor(); ?>
    <!-- FIN CONNEXION SCREEN -->

    <!-- HEADERS KEYBOARD -->
    <div id="content">
    <span class="title1">KEYBOARD</span>
    <span class="title2">SERIAL</span>
    <span class="title3">MARQUE</span>
    <span class="title4">MODELE</span>
    <span class="title5">ETAT</span>
    </div>

    <!-- CONNEXION KEYBOARD -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM keyboard ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>

    <!-- LIGNES KEYBOARD -->
    <div id="content">
    <span class="req1">
    <?php echo $resultat['id']; ?></span>
    <span class="req2">
    <?php echo $resultat['serial']; ?></span>
    <span class="req3">
    <?php echo $resultat['marque']; ?></span>
    <span class="req4">
    <?php echo $resultat['modele']; ?></span>
    <span class="req5">
    <?php echo $resultat['etat']; ?></span>
    </div>

<?php } $requete->closeCursor(); ?>
    <!-- FIN CONNEXION KEYBOARD -->

    <!-- HEADERS MOUSE -->
    <div id="content">
    <span class="title1">MOUSE</span>
    <span class="title2">SERIAL</span>
    <span class="title3">MARQUE</span>
    <span class="title4">MODELE</span>
    <span class="title5">ETAT</span>
    </div>

    <!-- CONNEXION MOUSE -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM mouse ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>

    <!-- LIGNES MOUSE -->
    <div id="content">
    <span class="req1">
    <?php echo $resultat['id']; ?></span>
    <span class="req2">
    <?php echo $resultat['serial']; ?></span>
    <span class="req3">
    <?php echo $resultat['marque']; ?></span>
    <span class="req4">
    <?php echo $resultat['modele']; ?></span>
    <span class="req5">
    <?php echo $resultat['etat']; ?></span>
    </div>

<?php } $requete->closeCursor(); ?>
    <!-- FIN CONNEXION MOUSE -->

    <!-- HEADERS LAPTOP -->
    <div id="content">
    <span class="title1">LAPTOP</span>
    <span class="title2">SERIAL</span>
    <span class="title3">MARQUE</span>
    <span class="title4">MODELE</span>
    <span class="title5">ETAT</span>
    </div>

    <!-- CONNEXION LAPTOP -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM laptop ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>

    <!-- LIGNES LAPTOP -->
    <div id="content">
    <span class="req1">
    <?php echo $resultat['id']; ?></span>
    <span class="req2">
    <?php echo $resultat['serial']; ?></span>
    <span class="req3">
    <?php echo $resultat['marque']; ?></span>
    <span class="req4">
    <?php echo $resultat['modele']; ?></span>
    <span class="req5">
    <?php echo $resultat['etat']; ?></span>
    </div>

<?php } $requete->closeCursor(); ?>
    <!-- FIN CONNEXION LAPTOP -->

    <!-- HEADERS TABLET -->
    <div id="content">
    <span class="title1">TABLET</span>
    <span class="title2">SERIAL</span>
    <span class="title3">MARQUE</span>
    <span class="title4">MODELE</span>
    <span class="title5">ETAT</span>
    </div>

    <!-- CONNEXION TABLET -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM tablet ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>

    <!-- LIGNES TABLET -->
    <div id="content">
    <span class="req1">
    <?php echo $resultat['id']; ?></span>
    <span class="req2">
    <?php echo $resultat['serial']; ?></span>
    <span class="req3">
    <?php echo $resultat['marque']; ?></span>
    <span class="req4">
    <?php echo $resultat['modele']; ?></span>
    <span class="req5">
    <?php echo $resultat['etat']; ?></span>
    </div>

<?php } $requete->closeCursor(); ?>
    <!-- FIN CONNEXION TABLET -->

    <!-- HEADERS PRINT -->
    <div id="content">
    <span class="title1">PRINT</span>
    <span class="title2">SERIAL</span>
    <span class="title3">MARQUE</span>
    <span class="title4">MODELE</span>
    <span class="title5">ETAT</span>
    </div>

    <!-- CONNEXION PRINT -->
<?php $bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM print ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>

    <!-- LIGNES PRINT -->
    <div id="content">
    <span class="req1">
    <?php echo $resultat['id']; ?></span>
    <span class="req2">
    <?php echo $resultat['serial']; ?></span>
    <span class="req3">
    <?php echo $resultat['marque']; ?></span>
    <span class="req4">
    <?php echo $resultat['modele']; ?></span>
    <span class="req5">
    <?php echo $resultat['etat']; ?></span>
    </div>

<?php } $requete->closeCursor(); ?>
    <!-- FIN CONNEXION PRINT -->

</body>
</html>