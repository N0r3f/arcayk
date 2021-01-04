<html>
<head>

    <title> SCREEN </title>
    <link rel="icon" type="image/bmp" href="../../img/screen.bmp"/>
    <link rel="stylesheet" type="text/css" href="../../css/form.css">

</head>
<body>  

    <aside>
    <a href="formScreen.php"><img src="../../img/screen.png" alt="Ajouter un écran"></a>
    <a href="../home.php"><img src="../../img/home.svg" alt="Revenir à l'accueil"></a>
    <a href="../stat/statScreen.php"><img src="../../img/stat.svg" alt="consulter les statistiques"></a>
    </aside>

    <form method="POST" action="../moteur/receiveForm/receiveFormScreen.php"><hr/>
    <input class="col-2" type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder=""/><hr/>
    <input class="col-14" type="text" name="serial"  placeholder="Numéro de série de l'écran" required pattern="^[A-Z *|* 0-9]{8,14}$" onBlur="this.value = this.value.toUpperCase()" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>

    <div class="formfield-select">
        <label for="la_marque">Marque</label>
    <div class="formfield-select--container">
        <select id="la_marque" name="marque">
            <optgroup label="Marque">
            <option value="HP">HP</option>
            <option value="LENOVO">LENOVO</option>
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
            <option value="1907FPT">1907FPT</option>
            <option value="S19A">S19A</option>
            <option value="AU6A">AU6A</option>
            </optgroup>
        </select>
    </div>
    </div>

    <div class="formfield-select">
        <label for="etat">Etat du matériel</label>
    <div class="formfield-select--container">
        <select id="etat" name="etat">
            <optgroup label="Etat">
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