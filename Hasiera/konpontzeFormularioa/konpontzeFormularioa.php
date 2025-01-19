<!DOCTYPE html>
<html lang="eu"> <!-- Dokumentuaren hizkuntza euskara dela definitzen du -->
<head>
    <meta charset="UTF-8"> <!-- Karaktere kodifikazioa -->
    <title>LAM</title> <!-- Orriaren izenburua -->
    <link rel="stylesheet" href="konpontzeFormularioa.css"> <!-- CSS fitxategia lotzen du -->
</head>

<body>
    <?php
    // Kanpoko fitxategitik menu bat gehitzen du
    require_once("../menua.php");
    ?>

    <!-- Bezeroaren datuak eta konponketa-eskaera jasotzeko formularioa -->
    <form action="../../Hasiera/erositakoProduktuak/erositakoProduktua.html" 
          class="formularioa" id="Formularioa" method="get">
        
        <div>
            <h1>Bete Formularioa (gailua konpondu)</h1> <!-- Formularioaren izenburua -->

            <!-- Izenaren eremua -->
            <label for="fname" class="block">Izena:</label><br>
            <input type="text" id="fname" name="fname" required placeholder="Izena"><br>

            <!-- Abizenaren eremua -->
            <label for="Abizena" class="block">Abizena:</label><br>
            <input type="text" id="Abizena" name="Abizena" placeholder="Abizena"><br>

            <!-- Telefono zenbakiaren eremua -->
            <label for="Telefonoa" class="block">Telefonoa:</label><br>
            <input type="text" id="Telefonoa" name="Telefonoa" required placeholder="+34 658 99 98 24"><br>

            <!-- Gailuaren modeloa eta argazkia igotzeko eremua -->
            <label for="Modeloa" class="block">Sartu zure Gailuaren Modeloa eta Argazkia:</label><br>
            <input type="text" id="Modeloa" name="Modeloa" required placeholder="Modeloa"><br><br>
            <input type="file" id="Pdfa" name="Pdfa" accept="application/pdf"><br><br>

            <!-- Gmail helbidearen eremua -->
            <label for="Gmail" class="block">Gmaila:</label><br>
            <input type="email" id="Gmail" name="Gmail" placeholder="Gmail"><br>

            <!-- Arazoaren deskribapena -->
            <label for="arazoa" class="block">Duzun Arazoa Azaldu labur:</label><br>
            <input type="text" id="arazoa" name="arazoa" placeholder="Arazoren deskribapena"><br>

            <!-- Ordainketa modua aukeratzeko zerrenda -->
            <label for="Herria" class="block">Ordaintzeko modua:</label><br>
            <select id="pueblo">
                <option value="" disabled selected>-- Txartela--</option> <!-- Lehenetsitako aukera -->
                <option value="Beasain">Kreditu eta zordunketa-txartelak</option>
                <option value="Itsasondo">Paypal</option>
                <option value="Ordizia">Beste batzuk</option> <!-- Itxi behar bezala -->
            </select><br><br>

            <!-- Txartel zenbakiaren eremua -->
            <label for="txartelakonpondu" class="block">Zure Txartela:</label><br>
            <input type="text" id="txartelakonpondu" name="txartela" placeholder="XXXX - XXXX - XXXX - XXXX"><br>

            <!-- Baldintzak onartzeko kontrol laukia -->
            <label for="Baimena" class="block">Baimena:</label>
            <input type="checkbox" id="Baimena" name="Baimena" value="Baimena"> Onartu baldintzak<br><br>

            <!-- Bidali eta ezabatu botoiak -->
            <input type="submit" value="Sartu" id="bidaliBotoiBerdea">
            <input type="reset" name="ezabatu" value="Ezabatu" id="bidaliBotoiGorria">
        </div>
    </form>

    <?php
    // Kanpoko fitxategitik kontaktua edo footer bat gehitzen du
    require_once("../kontaktua.php");
    ?>
</body>
</html>
