<html>
<head>
    <title> KEYBOARD </title>
    <link rel="icon" type="image/bmp" href="../../img/keyboard.bmp"/>
    <link rel="stylesheet" type="text/css" href="../../css/form.css">
</head>
<body>  
<aside>
    <a href="formKeyboard.php"><img src="../../img/keyboard.png" alt="Ajouter un clavier">
    <a href="../home.php"><img src="../../img/home.svg" alt="Revenir à l'accueil"></a>
    <a href="../stat/statKeyboard.php"><img src="../../img/stat.svg" alt="consulter les statistiques"></a>
</aside>
<form method="POST" action="../moteur/receiveForm/receiveFormKeyboard.php"><hr/>

<input class="col-2" type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder=""/><hr/>

<input class="col-14" type="text" name="serial" placeholder="Numéro de série du clavier" required pattern="^[A-Z *|* 0-9]{8,14}$" onBlur="this.value = this.value.toUpperCase()" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>


<div class="formfield-select">
<label for="la_marque">Marque</label>
<div class="formfield-select--container">
<select id="la_marque" name="marque">
<optgroup label="Marque">
        <option value="LENOVO">LENOVO</option>
        <option value="HP">HP</option>
        <option value="DELL">DELL</option>
        <option value="SAMSUNG">SAMSUNG</option>
        <option value="PHILIPS">PHILIPS</option>
</optgroup>
</select>
</div>
</div>

<div class="formfield-select">
<label for="le_modele">Modèle</label>
<div class="formfield-select--container">
<select id="le_modele" name="modele">
<optgroup label="Modèle">
        <option value="LA1905WG">LA1905WG</option>
        <option value="KU-0225">KU-0225</option>
        <option value="KB-1021">KB-1021</option>
        <option value="SK-8825">SK-8825</option>
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