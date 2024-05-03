﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/UnityLink_Announcements_3.css"/>
</head>
<body>
    <!--2.sayfadan gelen data bu sayfanın duyurularını belirler. kullanıcı'nın profilinde belirlediği current city infosu
        burada aynı şehirdeki duyuruları listelemek için kullanılacak-->
    <div class="flex-container">
        <div class="specify">
            <div class="img"></div> <!--php ile önceki sayfada tıklandığında buraya ilgili class'ı ClassList.add ile ekle-->
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
            <div class="flex-item-details">
                <p class="msg-from-db">
                    1.05.2024 tarihinde 9.30 - 17.30 saatleri arasında gerçekleşecek olan kan bağışı
                    etkinliğimize her katılımcıyı bekleriz!
                </p> <!--phpde katılan kişi sayısını göster-->
                <button class="join-btn">Join</button>
            </div>
            <div class="flex-item-details">
                <p class="msg-from-db">
                    1.05.2024 tarihinde 9.30 - 17.30 saatleri arasında gerçekleşecek olan kan bağışı
                    etkinliğimize her katılımcıyı bekleriz!
                    </p> <!--phpde katılan kişi sayısını göster-->
                <button class="join-btn">Join</button>
            </div>
        </div>
    </div>
</body>
</html>