<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pay Tuition Fees</title>
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    
    .summary {
      margin-top: 20px;
      padding: 15px;
      background: #f1f1f1;
      border-radius: 6px;
      font-size: 16px;
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
    input[type="number"] {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 150px;
      text-align: right;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <h1>Pay Tuition Fees</h1>
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
      <h2>Pay Tuition Fees</h2>
      <form action="pay_fees.php" method="POST">
        <table>
          <thead>
            <tr>
              <th>Fee Type</th>
              <th>Amount (Tk)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Course Fees</td>
              <td>20,000</td>
            </tr>
            <tr>
              <td>Activity Fee</td>
              <td>2,000</td>
            </tr>
            <tr>
              <td>Development Fee</td>
              <td>3,000</td>
            </tr>
            <tr>
              <td>Miscellaneous Fee</td>
              <td>1,500</td>
            </tr>
            <tr>
              <td>Lab Fee</td>
              <td>2,500</td>
            </tr>
          </tbody>
        </table>

        <div class="summary">
          <p><strong>Total Fees:</strong> <span id="total">29,000</span> Tk</p>
          <p><strong>Already Paid:</strong> <span id="paid">10,000</span> Tk</p>
          <p><strong>Due Amount:</strong> <span id="due">19,000</span> Tk</p>
        </div>

        <label for="payment">Enter Payment Amount (Tk):</label><br>
        <input type="number" id="payment" name="payment" min="1" max="19000" required><br><br>

        <button type="submit" class="btn-submit">Pay Now</button>
      </form>
    </div>
  </div>

  <!-- JS for updating Due Amount -->
  <script>
    const total = 29000;
    const paid = 10000;
    const dueElement = document.getElementById("due");
    const paymentInput = document.getElementById("payment");

    paymentInput.addEventListener("input", () => {
      let payment = parseInt(paymentInput.value) || 0;
      let newDue = total - paid - payment;
      if (newDue < 0) newDue = 0;
      dueElement.textContent = newDue.toLocaleString();
    });
  </script>
</body>
</html>
