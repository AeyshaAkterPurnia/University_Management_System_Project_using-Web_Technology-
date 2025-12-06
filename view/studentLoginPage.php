<!DOCTYPE HTML>
<html>
    <head>
        <title>Student Login Page</title>
        <link rel="stylesheet" href = "../css/StudentLoginPage.css">
    </head>
    <body>
        <form onsubmit = "return handlesubmit()">
           
           <p>ABC INTERNATIONAL UNIVERSITY-BANGLADESH</p>
            <div id = "leader">-Where leaders are created.</div>
            <p id = "SignIn">Sign in with your organization user name.</p>
            <img src="../img/ABCVarsityLogo.png">

            <input type= "text" name="username" placeholder = "UserName" id = "giveId"><br>
            <span id = "idError"></span><br>

            <input type= "password" name="password" placeholder = "Password" id = "password">
            <span id = "passError"></span>


          <a href="index.php">
          <button type ="button" id="LogInButton">Log In </button></a>

           <a href="ForgetPassword.php">
           <button type ="button" id="forgetButton">Forget Password?</button></a>

           <a href="RegistrationPage.php">
           <button type ="button" id="registration">You have no account? Registration now.</button></a>
            
        </form>
          <script src = "StudentLoginValidation.js"></script>
    </body>
</html>