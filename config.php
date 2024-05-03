<?php
// Veritabanı bilgileri
$servername = "";
$username = ""; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$database = ""; // Veritabanı adı

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);

}
?>
