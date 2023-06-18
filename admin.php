<?php
// Veritabanı bağlantısı yapılacak
$servername = "localhost";
$username = "kullanici_adi";
$password = "sifre";
$dbname = "veritabani_adi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Tarif silme işlemi
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Tarifi veritabanından silme sorgusu
    $sql = "DELETE FROM tarifler WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarif başarıyla silindi.";
    } else {
        echo "Tarif silinirken hata oluştu: " . $conn->error;
    }
}

// Tarifleri listeleme
$sql = "SELECT * FROM tarifler";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Admin Paneli</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Başlık</th>
                <th>Açıklama</th>
                <th>Kategori</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['category'] . "</td>";
                    echo "<td>";
                    echo "<a href='tarif-duzenle.php?id=" . $row['id'] . "'>Düzenle</a>";
                    echo "<a href='admin.php?id=" . $row['id'] . "' class='delete-link'>Sil</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Hiç tarif bulunamadı.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <script src="script.js"></script>
</body>

</html>

<?php
$conn->close();
?>
