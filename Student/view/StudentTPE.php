<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submit TPE - Student Dashboard</title>
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    .form-container {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
      max-width: 700px;
      margin: auto;
    }
    .form-container h2 {
      margin-bottom: 15px;
      color: #2c3e50;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 6px;
    }
    select, textarea, input {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 15px;
    }
    textarea {
      resize: none;
      height: 100px;
    }
    .btn {
      background: #3b5998;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 10px;
    }
    .btn:hover {
      background: #2c3e50;
    }
  </style>
</head>
<body>

<header>
  <h1>Teacher Performance Evaluation (TPE)</h1>
</header>

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

<div class="content">
  <div class="form-container">
    <h2>Submit Feedback for Teacher & Course</h2>
    <form action="submit_tpe.php" method="POST">
      
      <div class="form-group">
        <label for="course">Select Course</label>
        <select id="course" name="course" required>
          <option value="">-- Select Course --</option>
          <option value="CSE101">CSE101 - Intro to Programming</option>
          <option value="CSE202">CSE202 - Database Systems</option>
          <option value="CSE303">CSE303 - Operating Systems</option>
        </select>
      </div>

      <div class="form-group">
        <label for="teacher">Select Teacher</label>
        <select id="teacher" name="teacher" required>
          <option value="">-- Select Teacher --</option>
          <option value="T001">Dr. Rahman</option>
          <option value="T002">Prof. Karim</option>
          <option value="T003">Dr. Jamil</option>
        </select>
      </div>

      <div class="form-group">
        <label>Teaching Quality</label>
        <select name="teaching_quality" required>
          <option value="5">Excellent</option>
          <option value="4">Good</option>
          <option value="3">Average</option>
          <option value="2">Poor</option>
          <option value="1">Very Poor</option>
        </select>
      </div>

      <div class="form-group">
        <label>Study Materials Provided</label>
        <select name="study_material" required>
          <option value="5">Excellent</option>
          <option value="4">Good</option>
          <option value="3">Average</option>
          <option value="2">Poor</option>
          <option value="1">Very Poor</option>
        </select>
      </div>

      <div class="form-group">
        <label>Teacher-Student Interaction</label>
        <select name="interaction" required>
          <option value="5">Excellent</option>
          <option value="4">Good</option>
          <option value="3">Average</option>
          <option value="2">Poor</option>
          <option value="1">Very Poor</option>
        </select>
      </div>

      <div class="form-group">
        <label for="feedback">Additional Comments</label>
        <textarea id="feedback" name="feedback" placeholder="Write your feedback here..."></textarea>
      </div>

      <button type="submit" class="btn">Submit Feedback</button>
    </form>
  </div>
</div>

</body>
</html>
