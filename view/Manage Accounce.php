<!DOCTYPE html>
<html>
<head>
  <title>Manage Accounce</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/ManageAccountstyle.css">
</head>
<body>


  <header>
    <h1>Manage Accounce</h1>
    <div class="search-box">
      <input type="text" placeholder="Search finance records...">
      <button>Search</button>
    </div>
  </header>

  <div class="sidebar">
    <ul>
       <li><a href="index.php">Dashboard</a></li>
    <li><a href="MangeUser.php">Manage User</a></li>
    <li><a href="OfferCourse.php">Offered Course</a></li>
    <li><a href="ManageCourse.php">Manage Courses</a></li>
    <li><a href="ManageAddDrop.php">Manage Add/Drop Deadline </a></li>
    <li><a href="Manage Accounce.php">Manage Accounce</a></li>
    <li><a href="ManageLibrary.php">Manage Library</a></li>
    <li><a href="ViewAllBooks.php">View All Books</a></li>
    <li><a href="settings.php">Settings</a></li>
    <li><a href="studentLoginPage.php">Logout</a></li>
    </ul>
  </div>


  <div class="content">
    <h2>Tuition Fee Payments</h2>
    <table>
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Semester</th>
        <th>Amount</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>2021001</td>
        <td>Ali Hossain</td>
        <td>Spring 2025</td>
        <td>$500</td>
        <td class="paid">Paid</td>
      </tr>
      <tr>
        <td>2021002</td>
        <td>Sadia Rahman</td>
        <td>Spring 2025</td>
        <td>$500</td>
        <td class="pending">Pending</td>
      </tr>
    </table>

    <h2>Expense Reports</h2>
    <table>
      <tr>
        <th>Expense ID</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Date</th>
      </tr>
      <tr>
        <td>EXP-01</td>
        <td>Library Books</td>
        <td>$1200</td>
        <td>2025-02-15</td>
      </tr>
      <tr>
        <td>EXP-02</td>
        <td>Bus Maintenance</td>
        <td>$800</td>
        <td>2025-03-01</td>
      </tr>
    </table>

    <h2>Teacher Salary Payments</h2>
    <table>
      <tr>
        <th>Teacher ID</th>
        <th>Name</th>
        <th>Month</th>
        <th>Salary</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>T001</td>
        <td>Dr. Rahim</td>
        <td>August 2025</td>
        <td>$2000</td>
        <td class="paid">Paid</td>
      </tr>
      <tr>
        <td>T002</td>
        <td>Ms. Karim</td>
        <td>August 2025</td>
        <td>$1800</td>
        <td class="pending">Pending</td>
      </tr>
    </table>
  </div>

</body>
</html>
