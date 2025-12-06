<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Page</title>
  <style>
    body {
      background-color: #e7e8e8;
      font-family: Arial, sans-serif;
    }

    form {
      background-color: white;
      border: 2px solid black;
      width: 700px;         
      margin: 20px auto;
      padding: 14px 40px;
      box-sizing: border-box;
    }

    /* header layout: logo left + text right */
    .header {
      display: flex;
      align-items: center;
      margin-bottom: 25px;
    }
    .header img {
      width: 120px;
      height: auto;
      margin-right: 20px;
    }
    .header .title {
      flex: 1;
    }
    .header .title p {
      font-size: 22px;
      margin: 5px 10px 8px 18px;
      font-weight: bold;
    }
    .leader {
      color: gray;
      font-size: 16px;
      margin: 5px 17px 8px 18px;
    }

    /* form rows */
    .form-row {
      display: flex;
      align-items: center;
      margin-bottom: 16px;
    }
    .form-row label {
      width: 180px;
      font-weight: bold;
      font-size: 15px;
    }
    .form-row input[type="text"],
    .form-row input[type="password"],
    .form-row input[type="date"],
    .form-row select {
      flex: 1;
      padding: 9px;
      font-size: 15px;
      border: 1px solid #999;
      border-radius: 4px;
    }

    /* buttons */
    #signUp {
      width: 100%;
      padding: 12px;
      background-color: rgb(75, 75, 155);
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      margin-top: 6px;
    }
    #signUp:hover {
      background-color: rgb(55, 55, 135);
    }

    .login-link {
      display: block;
      text-align: center;
      margin-top: 10px;
      color: skyblue;
      text-decoration: none;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <form action="../db/registrationDBConnection.php" method="POST" enctype="multipart/form-data">
    <div class="header">
      <img src="../img/ABCVarsityLogo.png" alt="Logo">
      <div class="title">
        <p>ABC INTERNATIONAL UNIVERSITY-BANGLADESH</p>
        <div class="leader">-Where leaders are created.</div>
      </div>
    </div>

    <div class="form-row">
      <label for="fName">First Name:</label>
      <input type="text" id="fName" name="firstName" required>
    </div>

    <div class="form-row">
      <label for="lName">Last Name:</label>
      <input type="text" id="lName" name="lastName" required>
    </div>

    <div class="form-row">
      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" required>
    </div>

    <div class="form-row">
      <label for="cNum">Contact Number:</label>
      <input type="text" id="cNum" name="contact" required>
    </div>

    <div class="form-row">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>
    </div>

    <div class="form-row">
      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="">-- Select Gender --</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
      </select>
    </div>

    <div class="form-row">
      <label for="department">Department:</label>
      <select id="department" name="department" required>
        <option value="">-- Select Department --</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
      </select>
    </div>

    <div class="form-row">
      <label for="role">Role:</label>
      <select id="role" name="role" required>
        <option value="">-- Select Role --</option>
        <option value="Student">Student</option>
        <option value="Teacher">Teacher</option>
        <option value="Admin">Admin</option>
      </select>
    </div>

    <div class="form-row">
      <label for="pass">Password:</label>
      <input type="password" id="pass" name="password" required>
    </div>

    <div class="form-row">
      <label for="cpass">Confirm Password:</label>
      <input type="password" id="cpass" name="confirmPassword" required>
    </div>

    <button type="submit" id="signUp">Sign Up</button>
    <a href="studentLoginPage.php" class="login-link">Already have an account? Log In.</a>
  </form>

</body>
</html>
