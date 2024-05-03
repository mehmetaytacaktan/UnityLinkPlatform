<?php
    global $conn;
    session_start();
    include_once("config.php");
?>
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
            $query0 = "SELECT name FROM Organisations;";
            $result0 = $conn->query($query0);
            while($record = $result0->fetch_assoc()){ ?>
                <form action="announcements.php" method="get">
                    <input type="submit" name="btn" class="flex-item" id=<?= $record["name"] ?>/>
                </form>
            <?php
            }
            ?>     </div>
</body>
</html>