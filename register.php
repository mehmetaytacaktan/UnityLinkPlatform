<?php
global $conn;
session_start();
include_once("config.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        if ($password !== $confirm_password) {
            $error = "Passwords do not match.";
        } else {
            // Hash the password before saving to the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare and execute the SQL statement
            $stmt = $conn->prepare("INSERT INTO Users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                // Registration successful, redirect to login page
                header("Location: login.php");
                exit();
            } else {
                $error = "An error occurred while registering.";
            }
        }
    } else {
        $error = "Please fill all the fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - UnityLink</title>
    <link rel="stylesheet" href="css/UnityLink_Register_1.css">
</head>
<body>
    <div class="flex-container">
        <div class="register-background">
            <div id="register">
                <p id="greeting">Hello, friend!</p>
                <div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label>
                            <input type="text" name="username" placeholder="Username">
                        </label>
                </div>
                <div>
                    <label>
                        <input type="email" name="email" placeholder="E-mail">
                    </label>
                </div>
                <div>
                    <label>
                        <input type="password" name="password" placeholder="Password">
                    </label>
                </div>
                <div>
                    <label>
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </label>
                </div>
                <div>
                    <button type="submit" id="registerBtn">REGISTER</button>
                </div>
                <?php if (!empty($error)) { ?>
                    <div style="color: red;"><?php echo $error; ?></div>
                <?php } ?>
                <p id="reverseTxt">Already have an account? <a href="login.php" style="color: blue;">Sign In</a></p>
            </div>
        </div>
        <div id="img-background">
            <div>
                <p class="parag-on-img">Glad To See You!</p>
                <p class="subparag-on-img">
                    Do You Want To Help People or Nature?<br />
                    If It Is, You Are In Right Place!<br />
                    Sign Up And Help Out!
                </p>
            </div>
        </div>
    </div>
    <script src="js/UnityLink_Register_1.js"></script>
</body>
</html>
