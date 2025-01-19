<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .menua {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 60px;
    background-color: #4b4a4a;
    position: sticky;
    top: 0;
    width: 100%;
    margin: 0;
}
.navbar {
    display: flex;
    margin-right: 10px;
}
.navbar a {
    display: block;
    padding: 20px 20px;
    color: #fff;
    text-decoration: none;
    text-transform:uppercase;
    font-size: 20px;
    font-weight: 600;
    margin: 40px;
}
.navbar a:hover {
    background: #e91e63;

}

#bilatzailea {
    margin-right: 50px;
    color: #fff;
    font-weight: 600;
}
#bidalketaBotoia {
    font-weight: 600;
    padding: 3px;
}
.ikurriñak {
    height: 50px;
    width: 50px;
    border-radius: 15px;
    margin: 5px 20px 5px 5px;

}
.ikurriñak:hover {
    transform: scale(1.1);

}
</style>
</head>
<body>
    <header class="menua">
        <nav class="navbar">
            <a href="../../Gure orrialdea erronka/Gure orrialdea erronka.php" class="linkak">Hasiera</a>
            <a href="../../produktuak/produktuak.php" class="linkak">Produktuak</a>
            <a href="../../berriak/Berriak.php" class="linkak">Berriak</a>
            <a href="../../nor gara/Nor gara.php" class="linkak">Nor gara</a>
        </nav>
        <form action="" method="" id="bilatzailea">
            <label for="bilaketa" class="bilaketa">Produktua bilatu:</label>
            <input type="search" id="bilaketa">
            <input type="submit" id="bidalketaBotoia" value="Bidali">
        </form>
        <a href=""><img src="../../Euskal herriapng.png" class="ikurriñak"></a>
        <a href="../../Ingles/berriak/Berriak.html"><img src="../../banderaingles.jpeg" class="ikurriñak"></a>
    </header>
</body>
</html>