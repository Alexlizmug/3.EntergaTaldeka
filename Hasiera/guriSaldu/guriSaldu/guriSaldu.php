<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>LAM</title>
    <link rel="stylesheet" href="guriSaldu.css">
</head>

<body>
    <?php
    require_once("../menua.php");
    ?>
    <form action="/action_page.php" class="formularioa">
        <form>
            <h1>Bete formularioa (saltzeko)</h1>
            <form id="Formularioa" action="../../Hasiera/erositakoProduktuak/erositakoProduktua.html" method="get">
                <label class="block" for="fname">Izena: </label><br>
                <input class="fullWidth" Type="text" id="fnamerosi" name="fname" required placeholder="Izena"><br>
                <label class="block" For="fname">Abizena:</label><br>

                <input class="fullWidth" type="text" id="abizenaerosi" name="Abizena" placeholder="Abizena"><br>

                <label class="block" for="fname">Telefonoa: </label><br>
                <input class="fullWidth" Type="text" id="telefonoaerosi" name="Telefonoa" required
                    placeholder="+34 658 99 98 24"><br>
                <label class="block" for="fname">Kokapena: </label><br>
                <input class="fullWidth" Type="text" name="Telefonoa" required placeholder="Beasain"><br>


                <label class="block" for="Email">Gmaila:</label> <br>
                <input class="fullWidth" type="email" id="gmailerosi" name="fname" pattern="@" placeholder="Gmail">
                <br><br>
                <label class="block" for="fname">Zer saldu nahi duzu?</label><br>
                <input class="fullWidth" Type="text" name="Telefonoa" required placeholder="Beasain"><br><br>
                <label for="" class="text">Ordaintzeko modua:</label><br><br>
                <select id="pueblo">
                    <option value="" disabled selected>-- Txartela--</option>
                    <option value="Beasain">Kreditu eta zordunketa-txartelak</option>
                    <option value="Itsasondo">Paypal</option>
                    <option value="Ordizia">Beste batzuk</optgroup>
                </select><br><br>

                <label class="block" for="">Zure txartela: </label><br>
                <input class="fullWidth" type="text" id="txartelaerosi" name="fname"
                    placeholder="XXXX - XXXX - XXXX - XXXX"> <br>

                <label for="block" class="text"> Baimena ematen duzu? </label>
                <input type="checkbox" id="baimenaerosi" name="Baimena" value="Baimena"><br><br>

                <input class="fullWidth" type="submit" value="Sartu" id="bidaliBotoiBerdea">

                <input class="fullWidth" type="reset" name="ezabatu" value="Ezabatu" id="bidaliBotoiGorria">
            </form>
        </form>
        <?php
        require_once("../kontaktua.php");
        ?>
</body>

</html>