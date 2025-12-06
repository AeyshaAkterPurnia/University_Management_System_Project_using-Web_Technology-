<?php
session_start();
include("../php/config.php");
 include("../php/auth_check.php"); 

// Ensure student is logged in
if (!isset($_SESSION['student_id'])) {
    header("Location:StudentLibrary.php");
    exit();
}

$student_id = $_SESSION['student_id'];

// Fetch all books
$sql = "SELECT * FROM addbook";
$result = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html>
<head>
  
  <title>Student Library</title>
  <link rel="stylesheet"  href="../../css/style.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
    }
    table th, table td {
      padding: 12px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    table th {
      background: #3b5998;
      color: #fff;
    }
    table tr:hover {
      background: #f1f1f1;
    }
    .status-available {
      color: green;
      font-weight: bold;
    }
    .status-borrowed {
      color: red;
      font-weight: bold;
    }
    .btn-action {
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      margin: 2px;
    }
    .read-btn {
      background: #2980b9;
      color: white;
    }
    .borrow-btn {
      background: #27ae60;
      color: white;
    }
    .return-btn {
      background: #e67e22;
      color: white;
    }
    .fine-msg {
      margin-top: 10px;
      padding: 10px;
      background: #fdecea;
      color: #c0392b;
      border-left: 5px solid #e74c3c;
      display: none;
    }
  </style>
</head>
<body>

<header>
  <h1>Student Library Portal</h1>
</header>

<div class="sidebar">
  <ul>
    <li><a href="/project/Student/StudentDashboard.php"">Dashboard</a></li>
    <li><a href="CourseRegistration.php">Register Courses</a></li>
    <li><a href="PayFees.php">Pay Fees</a></li>
    <li><a href="StudentAddDrop.php">Add/Drop</a></li>
    <li><a href="/project/Student/StudentLibrary.php">Library</a></li>
    

      <li><a href="#">Consulting Hours</a></li>
      <li><a href="StudentApplecation.php">Student Applecation</a></li>
      <li><a href="#">Download Transcript</a></li>
      <li><a href="StudentTPE.php">Submit TPE</a></li>
      <li><a href="#">Profile Settings</a></li>
      <li><a href="/project/Student/logout.php">Logout</a></li>
  </ul>
</div>

<div class="content">
  <div class="form-container">
    <h2>Available Books in Library</h2>
    <table>
      <thead>
        <tr>
          <th>Book Title</th>
          <th>Author</th>
          <th>Year</th>
          <th>Type</th>
          <th>Available Copies</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['bookname']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo $row['pubYear']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td class="<?php echo ($row['status'] == 'Available') ? 'status-available' : 'status-borrowed'; ?>">
                    <?php echo $row['status']; ?>
                </td>
                <td><?php echo $row['descText']; ?></td>
                <td>
                    <?php if ($row['type'] == 'eBook'): ?>
                        <button class="btn-action read-btn" onclick="window.open('<?php echo $row['ebook']; ?>','_blank')">Read</button>
                    <?php else: ?>
                        <?php if ($row['status'] == 'Available'): ?>
                            <form action="borrow_book.php" method="POST" style="display:inline;">
                                <input type="hidden" name="book_id" value="<?php echo $row['bookid']; ?>">
                                <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                                <button type="submit" class="btn-action borrow-btn">Borrow</button>
                            </form>
                        <?php else: ?>
                            <form action="return_book.php" method="POST" style="display:inline;">
                                <input type="hidden" name="book_id" value="<?php echo $row['bookid']; ?>">
                                <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                                <button type="submit" class="btn-action return-btn">Return</button>
                            </form>
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
      
      
          
    </table>

    <div id="fineMessage" class="fine-msg">
       You are late! A fine of Tk 200 has been applied.
    </div>
  </div>
</div>

<script>
  // Example for reading eBook
  function readEbook(file) {
    window.open(file, '_blank');
  }

  // Example: Show fine message if student is late returning book
  // (In real PHP backend, calculate due date vs today)
  const borrowedDate = new Date("2025-08-15");
  const dueDays = 14;
  const dueDate = new Date(borrowedDate);
  dueDate.setDate(dueDate.getDate() + dueDays);

  const today = new Date();
  if (today > dueDate) {
    document.getElementById("fineMessage").style.display = "block";
  }
</script>

</body>
</html>
