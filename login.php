<?php
global $conn;
session_start();
include_once("config.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Hash the password before comparing with the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("SELECT * FROM Users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $row['password'])) {
                // Authentication successful
                $_SESSION["user_id"] = $row['user_id'];
                header("Location: selection.php?user_id=" . $_SESSION["user_id"]);
                exit();
            } else {
                // Authentication failed
                $error = "Invalid email or password.";
            }
        } else {
            // Authentication failed
            $error = "Invalid email or password.";
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
    <title>Login - UnityLink</title>
    <link rel="stylesheet" href="css/UnityLink_Register_1.css">
</head>
<body>
    <div class="flex-container">
        <div class="login-background">
            <div id="login">
                <p id="greeting">Welcome Back!</p>
                <div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label>
                            <input type="text" name="email" placeholder="E-mail">
                        </label>
                </div>
                <div>
                    <label>
                        <input type="password" name="password" placeholder="Password">
                    </label>
                </div>
                <div>
                    <button type="submit" id="signInBtn">SIGN IN</button>
                </div>
                <?php if (!empty($error)) { ?>
                    <div style="color: red;"><?php echo $error; ?></div>
                <?php } ?>
                <p id="createAccountText">Don't have an account? <a href="register.php" style="color: blue;">Create Account</a></p>
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
