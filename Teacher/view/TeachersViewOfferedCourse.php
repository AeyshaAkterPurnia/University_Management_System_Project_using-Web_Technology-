<?php
include "..UniversityManagementSystemProject/php/config.php";

// Query offered_course table
$sql = "SELECT * FROM offered_course";
$result = $conn->query($sql);

if (!$result) {
    die("Query Failed: " . $conn->error);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Teacher View Offered Course</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
body {
  margin: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #f4f6f9;
}

header {
  background: #3b5998;
  color: white;
  padding: 15px;
  text-align: center;
  position: relative;
}

.sidebar {
  width: 220px;
  background: #2c3e50;
  color: white;
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  padding-top: 70px; 
  box-shadow: 2px 0 5px rgba(0,0,0,0.2);
}

.sidebar ul { list-style: none; padding: 0; margin: 0; }
.sidebar ul li { border-bottom: 1px solid rgba(255,255,255,0.1); }
.sidebar ul li a {
  display: block;
  padding: 12px 20px;
  color: white;
  text-decoration: none;
  font-size: 16px;
  transition: background 0.3s;
}
.sidebar ul li a:hover { background: #3b5998; padding-left: 25px; }

.content {
  margin-left: 240px;
  padding: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
  background: white;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
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

table tr:nth-child(even) { background: #f9f9f9; }
table tr:hover { background: #f1f1f1; }
  </style>
</head>
<body>
  <header>
    <h1>Offered Courses</h1>
  </header>

  <div class="container">
    <aside class="sidebar">
      <ul>
        <li><a href="index.php" class="active">Dashboard</a></li>
        <li><a href="MangeUser.php">Manage User</a></li>
        <li><a href="TeachersViewOfferedCourse.php">Offered Course</a></li>
        <li><a href="TeachersViewAddDropDeadline.php">Add/Drop Deadline</a></li>
        <li><a href="TeacherProvideSlide.php">Provide Slide</a></li>
        <li><a href="TeacherViewAllLibraryBooks.php">View All Books</a></li>
        <li><a href="Adminsettings.php">Settings</a></li>
        <li><a href="studentLoginPage.php">Logout</a></li>
      </ul>
    </aside>

    <div class="content">
      <?php if ($result->num_rows > 0) { ?>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Department</th>
              <th>Course Title</th>
              <th>Capacity</th>
              <th>Enrolled Count</th>
              <th>Class Time</th>
              <th>Class Date</th>
              <th>Duration</th>
              <th>Course Fee</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['course_title']; ?></td>
                <td><?php echo $row['student_capacity']; ?></td>
                <td><?php echo $row['student_count']; ?></td>
                <td><?php echo $row['class_time']; ?></td>
                <td><?php echo $row['class_date']; ?></td>
                <td><?php echo $row['duration']; ?> hrs</td>
                <td><?php echo $row['course_fee']; ?> TK</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      <?php } else { ?>
        <p>No offered courses found.</p>
      <?php } ?>
    </div>
  </div>
</body>
</html>
