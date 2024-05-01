<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>UnityLink</title>
    <link rel="stylesheet" href="css/UnityLink_Register_1.css"/>
</head>
<body>
    <div class="flex-container">
        <div class="register-background">
            <div id="register">
                <p id="greeting">Hello, friend!</p>
                <div>
                    <label>
                        <input name="Name" type="text" placeholder="Name" />
                    </label>
                </div>
                <div class="create-acc">
                    <label>
                        <input type="text" placeholder="E-mail" />
                    </label>
                </div>
                <div>
                    <label>
                        <input type="password" placeholder="Password" />
                    </label>
                </div>
                <div class="create-acc">
                    <label>
                        <input type="password" placeholder="Password" />
                    </label>
                </div>
                <div>
                    <input type="checkbox" id="announcer" name="announcer"/>
                    <label for="announcer">I am an <span style="color:blue">announcer!</span></label>
                    <br />
                    <button id="reverseBtn">SIGN IN</button>
                    <p id="reverseTxt">Don't have any account? <span style="color:blue" onclick="alignRegister()">Create Account</span></p>
                </div>
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