<?php
// Veritabanı bilgileri
$servername = "sql11.freemysqlhosting.net";
$username = "sql11703375"; // Veritabanı kullanıcı adı
$password = "z5sSQ9IE8s"; // Veritabanı şifresi
$database = "sql11703375"; // Veritabanı adı

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}
?>
