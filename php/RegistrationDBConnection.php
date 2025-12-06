<?php

include "../view/ManageLibrary.php";

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "universitymanagementsystem";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $FirstName = $_POST["firstName"];
    $LastName = $_POST["lastName"];
    $DOB = $_POST["dob"];
    $Contact = $_POST["contact"];
    $Email = $_POST["email"];
    $Gender = $_POST["gender"];
    $Department = $_POST["department"];
    $Role = $_POST["role"];
    $Password = $_POST["password"];
    $ConfirmPassword = $_POST["confirmPassword"];


    if(empty($FirstName) || empty($LastName) || empty($DOB) || empty($Contact) || empty($Email) || empty($Gender) || empty($Department) || empty($Role) || empty($Password) || empty($ConfirmPassword)){
        echo "All fields must be filled";
    } 
    elseif ($Password !== $ConfirmPassword) {
        echo "Passwords do not match!";
    } 
    else {
        $HashedPassword = password_hash($Password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users 
        (first_name, last_name, dob, contact_number, email, gender, department, role, password) 
        VALUES ($FirstName, $LastName, $DOB, $Contact, $Email, $Gender, $Department, $Role,$HashedPassword )";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $FirstName, $LastName, $DOB, $Contact, $Email, $Gender, $Department, $Role, $HashedPassword);

        if ($stmt->execute()) {
            echo "Submission successful";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}

$conn->close();
?>