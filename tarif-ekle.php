<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Ekle</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Tarif Sitesi</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="tarifler.php">Tarifler</a></li>
            <li><a href="tarif-ekle.php">Tarif Ekle</a></li>
            <li><a href="admin-paneli.php">Admin Paneli</a></li>
        </ul>
    </nav>

    <main>
        <h2>Tarif Ekle</h2>

        <div class="tarif-ekle-form">
            <form action="tarif-kaydet.php" method="post">
                <label for="baslik">Başlık:</label>
                <input type="text" id="baslik" name="baslik" required>

                <label for="aciklama">Açıklama:</label>
                <textarea id="aciklama" name="aciklama" required></textarea>

                <input type="submit" value="Tarifi Ekle">
            </form>
        </div>
    </main>

    <footer>
        &copy; 2023 Tarif Sitesi
    </footer>
</body>

</html>
