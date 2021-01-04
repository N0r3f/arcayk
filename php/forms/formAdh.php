<html>
<head>
    <title> ADHERENT </title>
    <link rel="icon" type="image/bmp" href="../../img/adh.bmp"/>
    <link rel="stylesheet" type="text/css" href="../../css/form.css">
</head>
<body>  
    <aside>
    <a href="formAdh.php"><img src="../../img/adh.png" alt="Ajouter un adhérent"></a>
    <a href="../home.php"><img src="../../img/home.svg" alt="Revenir à l'accueil"></a>
    <a href="../stat/statAdh.php"><img src="../../img/stat.svg" alt="consulter les statistiques"></a>
</aside>
<form method="POST" action="../moteur/receives/receiveFormAdh.php"><hr/>

<input class="col-2" type="date" name="date" placeholder="" value="<?php echo date('Y-m-d'); ?>"/><hr/>
<input class="col-3" type="number" name="numAdhesion" placeholder="Numéro d'adhérent" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>
<input class="button1" type="button" value="Générer"/><hr/><br/>

<input class="col-4" type="text" name="nom" placeholder="Nom de l'adhérent" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>
<input class="col-5" type="text" name="prenom" placeholder="Prénom" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>
<input class="col-6" type="text" name="adresse" placeholder="Adresse postale" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>
<input class="col-7" type="tel" name="telephone" placeholder="Numéro de téléphone" required pattern="[0-9]{10}" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>
<input class="col-8" type="text" name="email" placeholder="adresse@email.com" required pattern="^[a-zA-Z.*.0-9_]+@[a-zA-Z0-9_]+\.[a-zA-Z]{2,6}$" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>
<div class="formfield-select">
<label for="mon_select">Indiquer le mode de retirement</label>
<div class="formfield-select--container">
<select id="mon_select" name="achatLoc">
    <optgroup label="Mode de retirement">
        <option value="achat">Achat</option>
        <option value="location">Location</option>
        <option value="nouvel_achat">Nouvel achat</option>
        <option value="renouvellement">Renouvellement</option>
    </optgroup>
</select>
</div>
</div></br>

<input class="col-10" type="number" name="quantite" placeholder="Quantité" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>

<div class="formfield-select">
<label for="mon_select">Indiquer le mode de paiement</label>
<div class="formfield-select--container">
<select id="mon_select" name="liqcheq">
    <optgroup label="Mode de paiement">
        <option value="liquide">Liquide</option>
        <option value="chèque">Chèque</option>
        <option value="carte">Carte</option>
        <option value="virement">Virement</option>
    </optgroup>
</select>
</div>
</div></br>

<input class="col-12" type="number" name="versement" placeholder="Versement" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/><br/>

<input class="col-13" type="number" name="intSerial" placeholder="Numéro GOUPIL" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>
<input class="button2" type="button" value="Générer"/><hr/>
<input class="col-14" type="text" name="originalSerial" placeholder="Numéro de série de l'UC" required pattern="^[A-Z *|* 0-9]{8,14}$" onBlur="this.value = this.value.toUpperCase()" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>

<input class="button3" type="submit" value="VALIDER"/><hr/>
<input class="button4" type="reset" value="ANNULER"/><hr/>
</form>


</body>
</html>