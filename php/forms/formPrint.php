<html>
<head>
    <title> IMPRIMANTE </title>
    <link rel="icon" type="image/bmp" href="../../img/print.bmp"/>
    <link rel="stylesheet" type="text/css" href="../../css/form.css">
</head>
<body>  
<aside>
    <a href="formPrint.php"><img src="../../img/print.png" alt="Ajouter une imprimante"></a>
    <a href="../home.php"><img src="../../img/home.svg" alt="Revenir à l'accueil"></a>
    <a href="../stat/statPrint.php"><img src="../../img/stat.svg" alt="consulter les statistiques"></a>
</aside>
<form method="POST" action="../moteur/receiveForm/receiveFormPrint.php"><hr/>

<input class="col-2" type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder=""/><hr/>

<input class="col-14" type="text" name="serial" placeholder="Numéro de série de l'imprimante" required pattern="^[A-Z *|* 0-9]{8,14}$" onBlur="this.value = this.value.toUpperCase()" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>


<div class="formfield-select">
<label for="la_marque">Marque</label>
<div class="formfield-select--container">
<select id="la_marque" name="marque">
<optgroup label="Marque">
        <option value="HP">HP</option>
        <option value="CANON">CANON</option>
        <option value="XEROX">XEROX</option>
        <option value="BROTHER">BROTHER</option>
</optgroup>
</select>
</div>
</div>

<div class="formfield-select">
<label for="le_modele">Modèle</label>
<div class="formfield-select--container">
<select id="le_modele" name="modele">
<optgroup label="Modèle">
        <option value="MPC306">MPC306</option>
        <option value="PIXMA MP102">PIXMA MP102</option>
        <option value="DESKJET 503">DESKJET 503</option>
        <option value="COLORJET X602">COLORJET x602</option>
</optgroup>
</select>
</div>
</div>

<div class="formfield-select">
<label for="mon_select">Etat du matériel</label>
<div class="formfield-select--container">
<select id="mon_select" name="etat">
<optgroup label="ETAT">
    <option value="BON">BON</option>
    <option value="MAUVAIS">MAUVAIS</option>
</optgroup>
</select>
</div>
</div>
</br>
<hr/>

<input class="button3" type="submit" value="VALIDER"/><hr/>
<input class="button4" type="reset" value="ANNULER"/><hr/>
</form>


</body>
</html>