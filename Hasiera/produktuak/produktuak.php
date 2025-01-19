<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>LAM</title>
    <link rel="stylesheet" href="cssErronkaProduktuak.css">

</head>

<body>
    <?php
    require_once("../menua.php")
        ?>
    <nav>
        <h1 id="title">Gure Produktuak</h1>
        <div class="Produktuak">
            <div class="denak">
                <h1>Saltzen ditugun Mugikorrak</h1>
                <a href="../produktuak/kategoriak/Mugikorrak.php"><img src="../../Agrazkiak/mugikorrakProduktuak.webp"
                        height="200px"></a>
            </div>
            <div class="denak">
                <h1>Saltzen ditugun Ordenagailuak</h1>
                <a href="../produktuak/kategoriak/ordenagailuak.php"><img
                        src="../../Agrazkiak/OrdenagailuakProduktuak.jpg" height="200px"></a>
            </div>
            <div class="denak">
                <h1>Saltzen ditugun Tabletak</h1>
                <a href="../produktuak/kategoriak/tablets.php"><img src="../../Agrazkiak/ipad pro 11.avif"
                        height="200px"></a>
            </div>
            <div class="denak">
                <h1>Saltzen ditugun Imprimagailuak</h1>
                <a href="../produktuak/kategoriak/imprimagailuak.php"><img src="../../Agrazkiak/impresora.webp"
                        height="200px"></a>
            </div>
            <div class="denak">
                <h1>Saltzen ditugun Kontsolak</h1>
                <a href="../produktuak/kategoriak/kontsolak.php"><img src="../../Agrazkiak/KontsolakProduktuak.jpg"
                        height="200"></a>
            </div>
        </div>
    </nav>
    <footer class="footer">
    <?php
    require_once("../kontaktua.php");
    ?>
    </footer>
</body>

</html>