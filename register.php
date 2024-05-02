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
                    <label>
                        <input name="Name" type="text" placeholder="Name">
                    </label>
                </div>
                <div>
                    <label>
                        <input type="text" placeholder="E-mail">
                    </label>
                </div>
                <div>
                    <label>
                        <input type="password" placeholder="Password">
                    </label>
                </div>
                <div>
                    <label>
                        <input type="password" placeholder="Confirm Password">
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="announcer" name="announcer">
                    <label for="announcer">I am an <span style="color: blue;">announcer!</span></label>
                </div>
                <button id="signUpBtn">SIGN UP</button>
                <p id="signInText">Already have an account? <a href="login.php" style="color: blue;">Sign In</a></p>
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
