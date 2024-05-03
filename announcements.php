<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/UnityLink_Announcements_3.css"/>
</head>
<body>
<?php
    global $conn;
    session_Start();
    include_once("config.php");
    $value = $_GET["btn"];

    $query0 = "SELECT name FROM Organisations WHERE name = '$value';";
    $result0 = $conn->query($query0);
    while($record = $result0->fetch_assoc()) {
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
    }
    ?>

    <!--2.sayfadan gelen data bu sayfanın duyurularını belirler. kullanıcı'nın profilinde belirlediği current city infosu
        burada aynı şehirdeki duyuruları listelemek için kullanılacak-->
    <div class="flex-container">
        <div class="specify">
            <div class="img" style="background-image: url('<?= $img_path ?>');" ></div><!--php ile önceki sayfada tıklandığında buraya ilgili class'ı ClassList.add ile ekle-->
            <label for="cities" class="flex-item-label">Choose a city: </label>
            <select name="cities" id="cities" class="flex-item">
                <option>Ankara</option>
                <option>Izmir</option>
                <option>Istanbul</option>
            </select>
            <label for="date-time-start" class="flex-item-label">Specify the start date and time: </label>
            <input type="datetime-local" id="date-time-start" name="date-time-start" class="flex-item" />
            <label for="date-time-end" class="flex-item-label">Specify the finish date and time: </label>
            <input type="datetime-local" id="date-time-end" name="date-time-end" class="flex-item" />
            <button id="search" class="flex-item">Search</button>
        </div>
        <div class="details">
                    <?php
                    $query1 = "SELECT content FROM Announcements WHERE announcer_name ='$value';";
                    $result1 = $conn->query($query1);
                    while($record = $result1->fetch_assoc()) {
                        ?>
                        <div class="flex-item-details">
                            <p class="msg-from-db">
                                <?= $record["content"] ?>
                            </p>
                            <button class="join-btn">Join</button>
                        </div>
                    <?php
                    }
                    ?>
        </div>
    </div>
</body>
</html>