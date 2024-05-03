<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/UnityLink_Profile_5.css"/>
</head>
<body>
    <!---<div class="flex-container">
        <div class="user-name">
            <p>HELLO USER</p><!--php ile kullanıcı ismi getirilecek--><!----
        </div>
        <div class="categories">
            <p class="categ-starter">MY MEDALS</p>
            <!--php ile kategorileri ve kullanıcının kazandığı rozetlerin resmi--><!----
            <p class="subcateg-started">BLOOD DONOR</p>
            <div class="category">
                <div class="img tier1"></div>
                <!--database'den uygun olan resimleri getir'--><!-----
                <div class="img tier2"></div><!--
            </div>
        </div>
    </div> -->

    <div class="flex-container">
        <div class="select-categ">
            <p class="item-label">HELLO USER</p><!--ismi db'den al-->
            <label for="country" class="item-label">Set Your Current Location: </label>
            <select name="country" id="country">
                <option>Ankara</option>
                <option>Izmir</option>
            </select>
            <p class="item-label">Your Total Point: 256/1000</p>
            <button class="medal-btn"><p class="item-label">BLOOD DONOR</p></button>
            <button class="medal-btn"><p class="item-label">ENLIGHTER</p></button>
            <button class="medal-btn"><p class="item-label">CARE TAKER</p></button>
            <button class="medal-btn"><p class="item-label">OPEN HANDED</p></button>
            <button class="medal-btn"><p class="item-label">TEAM SPIRIT</p></button>
        </div>
        <div class="medals">
            <!--php ile tıkladığında o butona ait kategoriyi getir-->
            <p class="item-label">Your Blood Donor Score: 100</p>
            <div class="img-container">
                <div class="img tier1"></div>
                <div class="img tier2"></div>
            </div>
        </div>
    </div>
</body>
</html>