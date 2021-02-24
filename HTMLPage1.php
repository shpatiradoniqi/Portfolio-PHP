
<!DOCTYPE html?

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>

    <link rel="stylesheet" href="ValidimiCSS.css">
   
</head>
<body>
    <a style="font-weight:bold" href="website.html"> Visit Website</a>
    <div id="container">
        <div id="tabs">
            <p id="lg" class="tabs" onclick="loginTabFun()" >Log in</p>
            <p id="rt" class="tabs" onclick="registerTabFun()">Register</p>

            <div id="clear"></div>

        </div>

        <div id="cont">
            <div id="login"  class="comm">
                <h3>Sign in</h3>
            <form id="mainForm" action="./businessLogic/loginVerify.php" method="post">
                <input id="se" type="text" name="username" placeholder="Email" required />
                <input id="sp" type="password" name="password" placeholder="Password" required />

                <input type="submit"  name="login-btn"   onclick="login()"/>
                <p onclick="forgetPass()">Forgot Password?</p>
            </div>
            <div id="register"   class="comm">
                <h3>Register</h3>
                <input id="rn" type="text"  name="register-username" placeholder="name" required />
                <input id="re" type="text" name="reg-email" placeholder="Email" required />
                <input id="rp" type="password" name="register-password" placeholder="Password" required />
                
                <button type="submit" class="registerbtn" name="register-btn" onclick="register()">Register</button>
            </div>
            </form>
            <div id="forgot" class="comm">
                <h3>Forgot Paswword</h3>

                <div>
                    <input id="fe" type="email" placeholder="Email" required />
                    <input type="submit" onclick="forgot()" value="Submit" />
                </div>
            </div>

        </div>


    </div>
    
    
    
</body>
</html>
<script src="ValidimiJS.js"></script> 


