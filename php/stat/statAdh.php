<html>
<head>

    <title> ADHERENTS </title>
    <link rel="icon" type="image/bmp" href="../../img/stat.bmp"/>
    <link rel="stylesheet" type="text/css" href="../../css/main/stat.css">

</head>
<body>  

    <aside>
    <a href="../formAdh.php"><img src="../../img/adh.png" alt="retour à l'ajout d'Adhérent"></a>
    <a href="../home.php"><img src="../../img/home.svg" alt="Revenir à l'accueil"></a>
    <a href="../crud.php"><img src="../../img/crud.svg" alt="Modifier/Ajouter par lot"></a>
    </aside>

        <div id="content">
        <span class="title1">ID</span>
        <span class="title2">DATE</span>
        <span class="title3">NUMADH</span>
        <span class="title4">NOM</span>
        <span class="title5">PRENOM</span>
        <span class="title6">ADRESSE</span>
        <span class="title7">TELEPHONE</span>
        <span class="title8">EMAIL</span>
        <span class="title9">RETIREMENT</span>
        <span class="title10">QUANTITE</span>
        <span class="title11">MODEPAIE</span>
        <span class="title12">TARIF</span>
        <span class="title13">NUMGOUPIL</span>
        <span class="title14">SERIAL</span>
        </div>
<?php
$bdd = new PDO("mysql:host=localhost;dbname=stock;charset=utf8", "root", "");
$requete = $bdd->query("SELECT * FROM entree ORDER BY id DESC LIMIT 0,9");
while ($resultat = $requete->fetch()) { ?>

    <div id="content">
    <span class="req1">
    <?php echo $resultat['id']; ?></span>
    <span class="req2">
    <?php echo $resultat['date']; ?></span>
    <span class="req3">
    <?php echo $resultat['numAdhesion']; ?></span>
    <span class="req4">
    <?php echo $resultat['nom']; ?></span>
    <span class="req5">
    <?php echo $resultat['prenom']; ?></span>
    <span class="req6">
    <?php echo $resultat['adresse']; ?></span>
    <span class="req7">
    <?php echo $resultat['telephone']; ?></span>
    <span class="req8">
    <?php echo $resultat['email']; ?></span>
    <span class="req9">
    <?php echo $resultat['achatLoc']; ?></span>
    <span class="req10">
    <?php echo $resultat['quantite']; ?></span>
    <span class="req11">
    <?php echo $resultat['liqCheq']; ?></span>
    <span class="req12">
    <?php echo $resultat['versement']; ?></span>
    <span class="req13">
    <?php echo $resultat['intSerial']; ?></span>
    <span class="req14">
    <?php echo $resultat['originalSerial']; ?></span>
    </div>

<?php } $requete->closeCursor(); ?>

</body>
</html>