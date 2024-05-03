<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/UnityLink_Selection_2.css" />
</head>
<body>
<header id="greeting">
    Hello, Click The Organisation You Want To Help!
</header>
<nav class="links">
    <button class="admin-level nav-btn">Admin Panel</button>
    <button class="announcer-level nav-btn">Announce</button>
    <button class="usr-level nav-btn">Profile</button>
    <button class="usr-level nav-btn">Leadership Table</button>
</nav>
<div class="flex-container">
    <?php
global $conn;
session_Start();
include_once("config.php");

$query0 = "SELECT name FROM Organisations;";
$result0 = $conn->query($query0);
while($record = $result0->fetch_assoc()){
    // Resim dosyasının varlığını kontrol edelim
    $extensions = array("jpeg", "jpg", "png");
    $img_path = null;
    foreach ($extensions as $ext) {
        $path = 'img/' . $record["name"] . '.' . $ext;
        if (file_exists($path)) {
            $img_path = $path;
            break;
        }
    }

    if ($img_path) {
        // Eğer resim dosyası varsa, düğme oluşturalım
        ?>
        <form action="announcements.php" method="get">
            <input type="submit" value="" name="btn" class="flex-item" id="<?= $record["name"] ?>" style="background-image: url('<?= $img_path ?>');" />
        </form>
        <?php
    } else {
        // Eğer resim dosyası yoksa, basit bir düğme oluşturalım
        ?>
        <form action="announcements.php" method="get">
            <input type="submit" name="btn" class="flex-item" id="<?= $record["name"] ?>" value="<?= $record["name"] ?>" />
        </form>
        <?php
    }
}
?>


    <!--
    <button id="Kizilay" class="flex-item"></button>
    <button id="Yesilay" class="flex-item"></button>
    <button id="TEMA" class="flex-item"></button>
    <button id="TEV" class="flex-item"></button>
    <button id="IHH" class="flex-item"></button>
    <button id="AKUT" class="flex-item"></button>
    <button id="Mor-cati" class="flex-item"></button>
    <button id="AFAD" class="flex-item"></button>
    -->
</div>
</body>
</html>