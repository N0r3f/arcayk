<html>
<head>

    <title> TABLETTE </title>
    <link rel="icon" type="image/bmp" href="../../img/tablet.bmp"/>
    <link rel="stylesheet" type="text/css" href="../../css/form.css">

</head>
<body>  

    <aside>
    <a href="formTablet.php"><img src="../../img/tablet.png" alt="Ajouter une tablette"></a>
    <a href="../home.php"><img src="../../img/home.svg" alt="Revenir à l'accueil"></a>
    <a href="../stat/statTablet.php"><img src="../../img/stat.svg" alt="consulter les statistiques"></a>
    </aside>

    <form method="POST" action="../moteur/receiveForm/receiveFormTablet.php"><hr/>
    
    <input class="col-2" type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder=""/><hr/>
    <input class="col-14" type="text" name="serial" placeholder="Numéro de série de la tablette" required pattern="^[A-Z *|* 0-9]{8,14}$" onBlur="this.value = this.value.toUpperCase()" onblur="this.placeholder= 'Vous n\'avez pas terminé la saisie'" required/><hr/>


    <div class="formfield-select">
        <label for="la_marque">Marque</label>
    <div class="formfield-select--container">
        <select id="la_marque" name="marque">
            <optgroup label="Marque">
            <option value="SAMSUNG">SAMSUNG</option>
            <option value="APPLE">APPLE</option>
            <option value="GOOGLE">GOOGLE</option>
            <option value="ACER">ACER</option>
            </optgroup>
        </select>
    </div>
    </div>

    <div class="formfield-select">
        <label for="le_modele">Modèle</label>
    <div class="formfield-select--container">
        <select id="le_modele" name="modele">
            <optgroup label="Modèle">
            <option value="IPAD">IPAD</option>
            <option value="GALAXYTAB">GALAXYTAB</option>
            <option value="CHROMEBOOK">CHROMEBOOK</option>
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