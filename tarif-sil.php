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

$conn->close();
?>
