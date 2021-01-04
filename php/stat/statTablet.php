<html>
<head>

    <title> TABLET </title>
    <link rel="icon" type="image/bmp" href="../../img/stat.bmp"/>
    <link rel="stylesheet" type="text/css" href="../../css/main/stat.css">

</head>
<body>  

    <aside>
    <a href="../forms/formTablet.php"><img src="../../img/tablet.png" alt="retour à l'ajout d'une tablette"></a>
    <a href="../home.php"><img src="../../img/home.svg" alt="Revenir à l'accueil"></a>
    <a href="../crud/crudTablet.php"><img src="../../img/crud.svg" alt="Modifier/Ajouter par lot"></a>
    <a id="print" href="javascript:window.print()"><img src="../../img/pdf.svg" alt="Enregistrer, imprimer en pdf"></a>
    </aside>

    <div id="content">
        <span class="title1">ID</span>
        <span class="title2">DATE</span>
        <span class="title3">SERIAL</span>
        <span class="title4">MARQUE</span>
        <span class="title5">MODELE</span>
        <span class="title6">ETAT</span>
        </div>

<?php
$bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM tablet ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>

<div id="content">
    <span class="req1">
    <?php echo $resultat['id']; ?></span>
    <span class="req2">
    <?php echo $resultat['date']; ?></span>
    <span class="req3">
    <?php echo $resultat['serial']; ?></span>
    <span class="req4">
    <?php echo $resultat['marque']; ?></span>
    <span class="req5">
    <?php echo $resultat['modele']; ?></span>
    <span class="req6">
    <?php echo $resultat['etat']; ?></span>
    </div>

<?php } $requete->closeCursor(); ?>

</body>
</html>