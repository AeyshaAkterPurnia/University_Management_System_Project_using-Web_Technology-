<!DOCTYPE html>
<html>
<head>

  <title>Student Application</title>
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    .form-container {
      background: #fff;
      padding: 20px;
      margin: 20px auto;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      max-width: 600px;
    }
    .form-container h2 {
      margin-bottom: 15px;
      text-align: center;
      color: #3b5998;
    }
    .form-container label {
      font-weight: bold;
    }
    .form-container textarea {
      width: 100%;
      height: 120px;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      resize: none;
    }
    .form-container select, 
    .form-container input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    .form-container button {
      background: #3b5998;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      width: 100%;
    }
    .form-container button:hover {
      background: #2c3e50;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <h1>Student Dashboard</h1>
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
      <h2>Student Application Form</h2>
      <form action="submit_application.php" method="POST">
        
        <label for="teacher">Select Teacher:</label>
        <select id="teacher" name="teacher" required>
          <option value="">-- Choose Teacher --</option>
          <option value="T001">Dr. Rahman (CSE Dept.)</option>
          <option value="T002">Prof. Karim (Math Dept.)</option>
          <option value="T003">Ms. Ayesha (English Dept.)</option>
        </select>

        <label for="application_type">Application Type:</label>
        <select id="application_type" name="application_type" required>
          <option value="">-- Select Type --</option>
          <option value="leave">Leave Request</option>
          <option value="extension">Project Extension</option>
          <option value="special">Special Consideration</option>
          <option value="other">Other</option>
        </select>

        <label for="subject">Application Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="Enter application subject" required>

        <label for="details">Application Details:</label>
        <textarea id="details" name="details" placeholder="Write your application here..." required></textarea>

        <button type="submit">Submit Application</button>
      </form>
    </div>
  </div>
</body>
</html>
