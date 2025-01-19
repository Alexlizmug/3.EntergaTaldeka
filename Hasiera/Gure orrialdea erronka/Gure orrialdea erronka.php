<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>LAM</title>
    <link rel="stylesheet" href="cssErronkaHasiera.css">
</head>

<body>
    <!-- Menua inportatzen -->
    <?php
    require_once("../menua.php");
    ?>

    <!-- Edukiaren atala -->
    <section class="content header">
        <div class="information">
            <h1 class="tituloa">Lam Empresa</h1>
            <div class="testua">
                <!-- Konpainiaren azalpena -->
                Gu informatikako enpresa bat gara, erabilitako teknologia zaharberritzen eta konpontzen aritzen gara:
                smartphoneak, ordenagailuak, tabletak eta gehiago, lehen egunean bezala errenditzeko behar duten arreta
                emanez. Produktu bakoitzak kalitate- eta jasangarritasun-estandar altuenak betetzen dituela ziurtatzea
                da gure aditu-taldearen helburua.
            </div>
            <!-- Informazio gehiago ikusteko botoia -->
            <form action="../Hasiera/nor gara/Nor gara.html" method="get"> 
                <button class="btn">gehiago ikusi</button>
            </form>
        </div>
    </section>

    <!-- Azpititulu nagusia -->
    <div class="azpitituloa">Gure produktu batzuk</div>

    <!-- Produktuen atala -->
    <section class="produktuak">
        <!-- Produktu bakoitzaren blokea -->
        <div class="produktua">
            <img src="../../Agrazkiak/qiphone13.jpeg" alt="iPhone" class="produktua-imagen">
            <h3>iPhone 13</h3>
            <a href="../Hasiera/IphoneAtala/iphoneAtala.html">
                <button class="botoia">Informazio gehiago ikusi</button>
            </a>
        </div>

        <div class="produktua">
            <img src="../../Agrazkiak/impresora.webp" alt="Impresora" class="produktua-imagen">
            <h3>Impresora Canon PIXMA </h3>
            <button class="botoia">Informazio gehiago ikusi</button>
        </div>

        <div class="produktua">
            <img src="../../Agrazkiak/ipad pro 11.avif" alt="Tablet" class="produktua-imagen">
            <h3>Ipad Pro 11</h3>
            <button class="botoia">Informazio gehiago ikusi</button>
        </div>

        <div class="produktua">
            <img src="../../Agrazkiak/acer aspire 5.webp" alt="Ordenador" class="produktua-imagen">
            <h3>Acer Aspire 5</h3>
            <button class="botoia">Informazio gehiago ikusi</button>
        </div>

        <div class="produktua">
            <img src="../../Agrazkiak/ps4.jpg" alt="PS4" class="produktua-imagen">
            <h3>PS4</h3>
            <button class="botoia">Informazio gehiago ikusi</button>
        </div>

        <div class="produktua">
            <img src="../../Agrazkiak/logitech g413.webp" alt="Ordenador" class="produktua-imagen">
            <h3>Logitech G413</h3>
            <button class="botoia">Informazio gehiago ikusi</button>
        </div>
    </section>

    <!-- Guri Saldu atala -->
    <section class="salduFormularioa">
        <div class="guriSaldu">
            <div id="testua">Zure produktu zaharrei bizi berri bat emateko ahalmena.</div>
            <a href="../../Hasiera/guriSaldu/guriSaldu.php">
                <button id="btn2">gehiago ikusi</button>
            </a>
        </div>
    </section>

    <!-- Konpontze formularioaren atala -->
    <section class="konpontzeFormularioaBack">
        <div class="konpontzeFormularioa">
            <p id="testua2">Zure gailua puskatuta duzu? Gure eskutan utzi!</p>
            <a href="../../Hasiera/konpontzeFormularioa/konpontzeFormularioa.php">
                <button id="btn3">gehiago ikusi</button>
            </a>
        </div>
    </section>

    <!-- Kontaktua inportatzen -->
    <?php
    require_once("../kontaktua.php");
    ?>
</body>

</html>
