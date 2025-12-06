<?php
session_start();
require_once __DIR__ . '/../php/config.php';

$sql = "SELECT p.*, s.student_id, u.first_name, u.last_name, u.email
        FROM payments p
        JOIN students s ON s.student_id = p.student_id
        LEFT JOIN users u ON u.id = s.user_id
        WHERE p.status='pending'
        ORDER BY p.payment_id ASC";
$rows = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Approve Payments</title>
  <link rel="stylesheet" href="/Project/css/style.css">
  <link rel="stylesheet" href="../css/ApprovedPaymentStyle.css">
</head>
<body>
<header><h1>Approve Payments</h1></header>
<div class="content">
  <div class="box">
    <table>
      <tr>
        <th>ID</th><th>Student</th><th>Email</th>
        <th>Amount</th><th>Method</th><th>Created</th><th>Action</th>
      </tr>
      <?php while($p=$rows->fetch_assoc()): ?>
      <tr>
        <td><?= (int)$p['payment_id'] ?></td>
        <td><?= htmlspecialchars(($p['first_name']??'').' '.($p['last_name']??'')) ?> (ID: <?= (int)$p['student_id'] ?>)</td>
        <td><?= htmlspecialchars($p['email']??'') ?></td>
        <td><?= number_format((float)$p['amount'],2) ?></td>
        <td><?= htmlspecialchars($p['method']) ?></td>
        <td><?= htmlspecialchars($p['payment_date']) ?></td>
        <td>
          <form action="../php/approve_payment.php" method="post" style="display:inline">
            <input type="hidden" name="id" value="<?= (int)$p['payment_id'] ?>">
            <input type="hidden" name="action" value="approve">
            <button class="btn ok" onclick="return confirm('Approve this payment?')">Approve</button>
          </form>
          <form action="../php/approve_payment.php" method="post" style="display:inline">
            <input type="hidden" name="id" value="<?= (int)$p['payment_id'] ?>">
            <input type="hidden" name="action" value="reject">
            <button class="btn no" onclick="return confirm('Reject this payment?')">Reject</button>
          </form>
        </td>
      </tr>
      <?php endwhile; ?>
    </table>
  </div>
</div>
</body>
</html>
