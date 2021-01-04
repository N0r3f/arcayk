<html>
<head>

    <title> UC </title>
    <link rel="icon" type="image/bmp" href="../../img/uc.bmp"/>
    <link rel="stylesheet" type="text/css" href="../../css/form.css">

</head>
<body>  

    <aside>
    <a href="formUc.php"><img src="../../img/uc.png" alt="Ajouter une unité centrale"></a>
    <a href="../home.php"><img src="../../img/home.svg" alt="Revenir à l'accueil"></a>
    <a href="../stat/statUc.php"><img src="../../img/stat.svg" alt="consulter les statistiques"></a>
    </aside>

    <form method="POST" action="../moteur/receiveForm/receiveFormUc.php"><hr/>
    <input type="date" name="date" value="<?php echo date('d/m/Y'); ?>" placeholder=""/><hr/>
    <input type="text" name="serial" placeholder="Numéro de série de l'UC" required pattern="^[A-Z *|* 0-9]{8,14}$" onBlur="this.value = this.value.toUpperCase()" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>


    <div class="formfield-select">
        <label for="la_marque">Marque</label>
    <div class="formfield-select--container">
        <select id="la_marque" name="marque">
            <optgroup label="Marque">
            <option value="LENOVO">LENOVO</option>
            <option value="HP">HP</option>
            </optgroup>
        </select>
    </div>
    </div>

    <div class="formfield-select">
        <label for="le_modele">Modèle</label>
    <div class="formfield-select--container">
        <select id="le_modele" name="modele">
            <optgroup label="Modèle">
            <option value="S0VS00">S0VS00</option>
            <option value="6300">6300</option>
            <option value="N8G">N8G</option>
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