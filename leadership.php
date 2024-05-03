<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/UnityLink_Leadership_6.css"/>
</head>
<body>
    <div class="flex-container">
        <div class="users">
            <p class="head-par">LEADERSHIP TABLE</p>
            <?php
            global $conn;
            session_start();
            include_once("config.php");

            // Liderlik tablosundan verileri al
            $sql = "SELECT * FROM Leadership ORDER BY points DESC LIMIT 20";
            $result = $conn->query($sql);

            // Verileri işle
            if ($result->num_rows > 0) {
                // Veritabanından gelen her bir satır için
                while($row = $result->fetch_assoc()) {
                    echo "<div class='user'>";
                    echo "<p class='user-info'>" . $row["name"] . ", " . $row["points"] . " puan, " . $row["city"] . "</p>";
                    echo "<p class='user-info'>Most of the points comes from:</p>";
                    echo "<div class='img kizilay3'></div>";
                    echo "<button class='user-info-btn'>Inspect</button>";
                    echo "</div>";
                }
            } else {
                echo "Veri bulunamadı";
            }
            $conn->close();
            ?>
            <!--database'den puanı en yüksek olan 20 kullanıcıyı çek-->
        </div>
        <div class="details">
            <div class="user-details">
                <p class="user-info">Mehmet Akif Cifci</p>
                <p class="user-info">Current Position: 1.</p>
                <p class="user-info">Total Points: 300000</p>
                <p class="user-info">Medals Earned</p>
                <div class="img-container">
                    <div class="img kizilay"></div>
                    <div class="img kizilay2"></div>
                </div>
                <button class="close-btn">Close</button>
                <!--js details kısmı ilk başta gözükmeyecek. kullanıcı inspect butonuna tıklayınca gözükür ve close butonuna tıklayınca
                   gözükmez-->
            </div>
        </div>
    </div>

    <script>
        // Yukarıda verilen JavaScript kodunu buraya yapıştırın
        document.addEventListener('DOMContentLoaded', () => {
            // Leadership tablosundaki her bir kullanıcı için inspect düğmesine bir event listener ekle
            const inspectButtons = document.querySelectorAll('.user-info-btn');
            inspectButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Kullanıcının ismini al
                    const userName = button.parentNode.querySelector('.user-info').textContent.split(',')[0];

                    // AJAX kullanarak kullanıcının detaylarını al
                    const xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if (this.readyState === 4 && this.status === 200) {
                            // Detayları göstermek için bir modal veya başka bir arayüz oluştur
                            const userDetails = JSON.parse(this.responseText);
                            const modalContent = `
                                <div class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <p class="user-info">${userDetails.name}</p>
                                        <p class="user-info">Current Position: ${userDetails.city}</p>
                                        <p class="user-info">Total Points: ${userDetails.points}</p>
                                        <p class="user-info">Medals Earned</p>
                                        <div class="img-container">
                                            <div class="img kizilay"></div>
                                            <div class="img kizilay2"></div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            document.body.insertAdjacentHTML('beforeend', modalContent);

                            // Kapatma düğmesine event listener ekle
                            const closeButton = document.querySelector('.close');
                            closeButton.addEventListener('click', () => {
                                document.querySelector('.modal').remove();
                            });
                        }
                    };
                    xhr.open('GET', `get_user_details.php?name=${userName}`, true);
                    xhr.send();
                });
            });
        });
    </script>
</body>
</html>
