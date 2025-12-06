<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = intval($_POST['user_id']);
    $conn->query("DELETE FROM users WHERE id=$user_id");
    echo "❌ User deleted successfully!";
}
?>
