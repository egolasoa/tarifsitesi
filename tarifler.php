<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifler</title>
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
        <h2>Tarifler</h2>

        <div class="tarifler-container">
            <?php
            // Tarifleri veritabanından çekme ve listeleme kodları

            // Veritabanı bağlantısı ve sorgusu

            // Tarifleri döngü ile listeleme
            while ($row = /* Sorgudan sonuç al */) {
                $id = $row['id'];
                $baslik = $row['baslik'];
                $aciklama = $row['aciklama'];

                echo '<div class="tarif-kutusu">';
                echo '<h3>' . $baslik . '</h3>';
                echo '<p>' . $aciklama . '</p>';
                echo '<a href="tarif-detay.php?id=' . $id . '">Detay</a>';
                echo '</div>';
            }
            ?>
        </div>
    </main>

    <footer>
        &copy; 2023 Tarif Sitesi
    </footer>
</body>

</html>
