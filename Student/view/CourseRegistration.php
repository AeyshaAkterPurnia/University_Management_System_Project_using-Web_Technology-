<!DOCTYPE html>
<html>
<head>
  <title>Student Course Registration</title>
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }
    table th, table td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }
    table th {
      background: #3b5998;
      color: white;
    }
    table tr:nth-child(even) {
      background: #f9f9f9;
    }
    .btn-submit {
      margin-top: 15px;
      padding: 10px 20px;
      border: none;
      background: #2c3e50;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }
    .btn-submit:hover {
      background: #34495e;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <h1>Student Course Registration</h1>
    <div class="search-box">
      <input type="text" placeholder="Search...">
      <button>Search</button>
    </div>
  </header>

  <!-- Sidebar -->
  <div class="sidebar">
    <ul>
      <li><a href="StudentDashboard.php">Dashboard</a></li>
    <li><a href="CourseRegistration.php">Register Courses</a></li>
    <li><a href="PayFees.php">Pay Fees</a></li>
    <li><a href="StudentAddDrop.php">Add/Drop</a></li>
    <li><a href="StudentLibrary.php">Library</a></li>
    

      <li><a href="#">Consulting Hours</a></li>
      <li><a href="StudentApplecation.php">Student Applecation</a></li>
      <li><a href="#">Download Transcript</a></li>
      <li><a href="StudentTPE.php">Submit TPE</a></li>
      <li><a href="#">Profile Settings</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="content">
    <div class="form-container">
      <h2>Register for Courses</h2>
      <form action="register_course.php" method="POST">
        <table>
          <thead>
            <tr>
              <th>Select</th>
              <th>Course Code</th>
              <th>Course Title</th>
              <th>Section</th>
              <th>Capacity</th>
              <th>Enrolled</th>
              <th>Available Seats</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" name="courses[]" value="CSE101-A"></td>
              <td>CSE101</td>
              <td>Intro to Programming</td>
              <td>A</td>
              <td>40</td>
              <td>32</td>
              <td>8</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="courses[]" value="CSE101-B"></td>
              <td>CSE101</td>
              <td>Intro to Programming</td>
              <td>B</td>
              <td>40</td>
              <td>40</td>
              <td>0</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="courses[]" value="CSE205-A"></td>
              <td>CSE205</td>
              <td>Data Structures</td>
              <td>A</td>
              <td>35</td>
              <td>28</td>
              <td>7</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="courses[]" value="MAT110-A"></td>
              <td>MAT110</td>
              <td>Calculus I</td>
              <td>A</td>
              <td>50</td>
              <td>47</td>
              <td>3</td>
            </tr>
          </tbody>
        </table>
        <button type="submit" class="btn-submit">Register Selected Courses</button>
      </form>
    </div>
  </div>
</body>
</html>
