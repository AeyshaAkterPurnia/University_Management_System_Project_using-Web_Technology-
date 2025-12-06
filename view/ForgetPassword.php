<!DOCTYPE HTML>
<html>
    <head>
        <title>Forget Password</title>
        <link rel="stylesheet" href = "../css/forgetPasswordStyle.css">   
    </head>
    <body>
      <form onsubmit = "return handlechangePassButton()">

         <label id ="emailLabel">Email:</label>
         <input type ="text" id="email">
        
         <label id ="cNumLabel">Contact Number:</label>
         <input type ="text" id="cNum">
         
         <button type = "submit" id = "verifyButton">Log In</button>

         <label id ="newPassLabel">New Password:</label>
         <input type ="text" id="newPass">

         <label id ="conPassLabel">Confirm Password:</label>
         <input type ="text" id="conPass">

          <a href= "studentLoginPage.php">
          <button type = "submit" id = "changePassButton">Change Password</button></a>

        </form>
    </body>
</html>